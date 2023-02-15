<?php

class UsersController extends AppController {
	public $uses = array('Box','Location','User','Wheel');
	public $paginate = array(
        'limit' => 25,
        'conditions' => array('status' => '1'),
    	'order' => array('User.username' => 'asc' ) 
    );
	
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('login','add'); 
    }
	


	public function login() {
		
		//if already logged-in, redirect
		if($this->Session->check('Auth.User')){
			$this->redirect(array('action' => 'index'));		
		}
		
		// if we get the post information, try to authenticate
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				$this->Session->setFlash(__('Welcome, '. $this->Auth->user('username')));
				$this->redirect($this->Auth->redirectUrl());
			} else {
				$this->Session->setFlash(__('Invalid username or password'));
			}
		} 
	}

	public function logout() {
		$this->redirect($this->Auth->logout());
	}

    public function index() {
		
		$wheel=$this->Wheel->find('all');
		
		$this->set('wheel',$wheel);
		$this->paginate = array(
			'limit' => 6,
			'order' => array('User.username' => 'asc' )
		);
		$users = $this->paginate('User');
		$this->set(compact('users'));
    }


    public function add() {
        if ($this->request->is('post')) {
				
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been created'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be created. Please, try again.'));
			}	
        }
    }
	public function wheel_edit() {
        //get the id of the user to be edited
        $id = $this->request->params['pass'][0];
          
        //set the user id
        $this->Wheel->id = $id;
          
        //check if a user with this id really exists
        if( $this->Wheel->exists() ){
          
            if( $this->request->is( 'post' ) || $this->request->is( 'put' ) ){
                //save user
             
                // echo"<pre>";
                // print_r($this->request->data);
                // exit;
                if( $this->Wheel->save( $this->request->data ) ){ 
                    $user['Wheel']['modified'] = date('Y-m-d H:i:s');
             
                    $this->request->data['Wheel']['modified']=date("Y-m-d H:i:s");
                    //set to user's screen
                    $this->Session->setFlash('Wheel details was edited.');
                      
                    //redirect to user's list
                    $this->redirect(array('action' => 'index'));
                      
                }else{
                    $this->Session->setFlash('Unable to edit user. Please, try again.');
                }
                  
            }else{
              
                //we will read the user data
                //so it will fill up our html form automatically
                $this->request->data = $this->Wheel->read();
            }
              
        }else{
            //if not found, we will tell the user that user does not exist
            $this->Session->setFlash('The user you are trying to edit does not exist.');
            $this->redirect(array('action' => 'index'));
                  
            //or, since it we are using php5, we can throw an exception
            //it looks like this
            //throw new NotFoundException('The user you are trying to edit does not exist.');
        }
          
      
    }
	public function wheel_add(){
		$wheel=$this->Wheel->find('all');
        //check if it is a post request
        //this way, we won't have to do if(!empty($this->request->data))
        if ($this->request->is('post')){
            //echo "<pre>";print_r($this->request->data);exit;
          
            $this->request->data['Wheel']['created']=date("Y-m-d H:i:s");
            $this->request->data['Wheel']['modified']=date("Y-m-d H:i:s");
       
     //   echo "<pre>";print_r($this->request->data);exit;
            if ($this->Wheel->save($this->request->data)){
                
                //set flash to user screen
                $this->Session->setFlash('Wheel detail was added successfully.');
                //redirect to user list
                $this->redirect(array('action' => 'index'));
                  
            }else{
                //if save failed
                $this->Session->setFlash('Unable to add user. Please, try again.');
                  
            }
        }
		
		$this->set('wheel',$wheel);

    }
	public function location(){
  
        //check if it is a post request
        //this way, we won't have to do if(!empty($this->request->data))
        if ($this->request->is('post')){

           
            $this->request->data['Location']['created']=date("Y-m-d H:i:s");
            $this->request->data['Location']['modified']=date("Y-m-d H:i:s");
            //echo "<pre>";print_r($this->request->data);exit;
            if ($this->Location->save($this->request->data)){
                
                //set flash to user screen
                $this->Session->setFlash('Location was added successfully.');
                //redirect to user list
                $this->redirect(array('action' => 'index'));
                  
            }else{
                //if save failed
                $this->Session->setFlash('Unable to add Location. Please, try again.');
                  
            }
        }
    }
    public function box(){
  
        //check if it is a post request
        //this way, we won't have to do if(!empty($this->request->data))
        if ($this->request->is('post')){

           
            $this->request->data['Box']['created']=date("Y-m-d");
            $this->request->data['Box']['modified']=date("Y-m-d");
            //echo "<pre>";print_r($this->request->data);exit;
            if ($this->Box->save($this->request->data)){
				
                
                //set flash to user screen
                $this->Session->setFlash('Box was added successfully.');
                //redirect to user list
                $this->redirect(array('action' => 'index'));
                  
            }else{
				echo "ehllo";exit;
                //if save failed
                $this->Session->setFlash('Unable to add Box. Please, try again.');
                  
            }
        }
    }
	
    public function edit($id = null) {

		    if (!$id) {
				$this->Session->setFlash('Please provide a user id');
				$this->redirect(array('action'=>'index'));
			}

			$user = $this->User->findById($id);
			if (!$user) {
				$this->Session->setFlash('Invalid User ID Provided');
				$this->redirect(array('action'=>'index'));
			}

			if ($this->request->is('post') || $this->request->is('put')) {
				$this->User->id = $id;
				if ($this->User->save($this->request->data)) {
					$this->Session->setFlash(__('The user has been updated'));
					$this->redirect(array('action' => 'edit', $id));
				}else{
					$this->Session->setFlash(__('Unable to update your user.'));
				}
			}

			if (!$this->request->data) {
				$this->request->data = $user;
			}
    }

   
	
	public function activate($id = null) {
		
		if (!$id) {
			$this->Session->setFlash('Please provide a user id');
			$this->redirect(array('action'=>'index'));
		}
		
        $this->User->id = $id;
        if (!$this->User->exists()) {
            $this->Session->setFlash('Invalid user id provided');
			$this->redirect(array('action'=>'index'));
        }
        if ($this->User->saveField('status', 1)) {
            $this->Session->setFlash(__('User re-activated'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not re-activated'));
        $this->redirect(array('action' => 'index'));
    }
	public function wheel_delete() {
        $id = $this->request->params['pass'][0];
          
        //the request must be a post request 
        //that's why we use postLink method on our view for deleting user
        if( $this->request->is('get') ){
          
            $this->Session->setFlash('Delete method is not allowed.');
            $this->redirect(array('action' => 'index'));
              
            //since we are using php5, we can also throw an exception like:
            //throw new MethodNotAllowedException();
        }else{
          
            if( !$id ) {
                $this->Session->setFlash('Invalid id for user');
                $this->redirect(array('action'=>'index'));
                  
            }else{
                //delete user
                if( $this->Wheel->delete( $id ) ){
                    //set to screen
                    $this->Session->setFlash('Wheel information was deleted.');
                    //redirect to users's list
                    $this->redirect(array('action'=>'index'));
                      
                }else{  
                    //if unable to delete
                    $this->Session->setFlash('Unable to delete Wheel details.');
                    $this->redirect(array('action' => 'index'));
                }
            }
        }
    }
	
	public function delete($id = null) {
		
		if (!$id) {
			$this->Session->setFlash('Please provide a Student id');
			$this->redirect(array('action'=>'index'));
		}
		
        $this->Student->id = $id;
        if (!$this->Student->exists()) {
            $this->Session->setFlash('Invalid Student id provided');
			$this->redirect(array('action'=>'index'));
        }
        if ($this->Student->saveField('status', 0)) {
            $this->Session->setFlash(__('Student deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Student was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
	function pdf_print()
{
    App::import('Vendor', 'TCPDF', array('file' => 'TCPDF/tcpdf.php'));
    App::import('Vendor', 'Words', array('file' => 'Words/words.php'));
    //echo '<pre>'; print_r($towords); exit;
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    // set document information
    $pdf->SetCreator(PDF_CREATOR);
    

    $companyName = "My Wheels \n and \nTires";
    
    
    $pdf->SetMargins(PDF_MARGIN_LEFT, 28, PDF_MARGIN_RIGHT);
    
    // set header and footer fonts
    $pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

    // set default monospaced font
    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

  
    // set auto page breaks
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
    $pdf->SetFont('times', '', 8);
     $pdf->AddPage();

    $id = $this->params['pass'][0];//get id



    $data = $this->Wheel->findById($id);
    $detail1=$data['Wheel']['name'];
    $detail2=$data['Box']['name'];
    $detail3=$data['Location']['name'];
    $detail4=$data['Wheel']['doc_date'];

    $htmlcustomer = '
    <table>
      
    <tr>
        <td width="30%" align="left" style="font-size:10px"><b>WHEEL ID</b></td><td width="3%" align="left">:</td><td style="font-size:10px"width="67%" align="left">' . $id . '</td>
    </tr>
    <tr>
        <td style="font-size:10px"width="30%" align="left"><b>NAME of Wheel</b></td><td width="3%" align="left">:</td><td style="font-size:10px"width="67%" align="left">' . $detail1 . '</td>
    </tr>
    <tr>
        <td style="font-size:10px"width="30%" align="left"><b>Box </b></td><td width="3%" align="left">:</td><td style="font-size:10px"width="67%" align="left">' . $detail2 . '</td>
    </tr>
    <tr>
        <td style="font-size:10px"width="30%" align="left"><b>Location </b></td><td width="3%" align="left">:</td><td style="font-size:10px"width="67%" align="left">' . $detail3 . '</td>
    </tr>
    
   <br/><br/><br/><br/><br/><br/><br/><br/><br/>

    </table>';
   
  
    $html2 = '<table cellspacing="0" cellpadding="1" border="1" width="100%" align="center">
    <tr><th style="font-size:10px" width="50%" align="center">TITLE</th><th style="font-size:10px"width="50%" align="center"> DATA</th></tr>
    <tr><td style="font-size:10px"width="50%" align="center">Wheel id</td><td style="font-size:10px"width="50%" align="center"> ' . $data['Wheel']['id'] . '</td></tr>
    <tr><td style="font-size:10px"width="50%" align="center">NAME</td><td style="font-size:10px"width="50%" align="center"> ' . $data['Wheel']['name'] . '</td></tr>
    <tr><td style="font-size:10px"width="50%" align="center">CREATED DATE</td><td style="font-size:10px"width="50%" align="center"> ' . $data['Wheel']['created'] . '</td></tr>
    <tr><td style="font-size:10px"width="50%" align="center">MODIFIED DATE</td><td style="font-size:10px"width="50%" align="center"> ' . $data['Wheel']['modified'] . '</td></tr>
    <tr><td style="font-size:10px"width="50%" align="center">BOX </td><td style="font-size:10px"width="50%" align="center"> ' . $data['Box']['name'] . '</td>   </tr>
    </table>   <br/><br/><br/><br/><br/><br/><br/><br/><br/>';
    
    $html3 = '<br><br><br><br><br>   <br/><br/><br/><br/><br/><br/><br/><br/><br/><table>
    <tr>
        <td align="left"><br><br><br><b>_______________________</b></td>
        <td align="right"><br><br><br><b>_________________________</b></td>
    </tr>
    <tr>
        <td align="left"><b>Customer Signature</b></td>
        <td align="right"><b>Authorized Signature</b></td>
    </tr>
    </table> ';
$pdf->writeHTML($html, true, false, true, false, '');
    $pdf->writeHTML($html, true, false, true, false, '');
    $pdf->writeHTML($htmlcustomer, true, false, true, false, '');
    $pdf->writeHTML($html2, true, false, true, false, '');
    
    $pdf->writeHTML($html, true, false, true, false, '');

    $html = '<span style="text-align:justify;font-size:10px">I am leaving the vehicle detailed in this Repair Order for repairs and for attending to such jobs that are listed in the Repair Order Sheet and in the Continuation Repair Order Sheets.You may also carryout such other jobs as you find it necessary during the course of repairs and after dismantaling to make the vehicle roadworthy. </span>';
    $pdf->writeHTML($html, true, false, true, false, '');


    $html = '<span style="text-align:justify;font-size:10px"><br>I hereby agree and definitely understand that Messrs.' . $outlet_address['User']['company_name'] . '. assume no responsibility for loss or damage by whatsoever means to vehicle placed with them for storage,sale or repair.The above vehicle left in your premises is entirely at my/my employers/owners risk as accidents,damage by fire or any other cause. I also authorize you to carry out the road test/test drive in my vehicle at my/my employers/owners risk/cost.</span>';
    $pdf->writeHTML($html, true, false, true, false, '');


    $html = '<span style="text-align:justify;font-size:10px"><br>All disputes arising out of or in connection with this bill/invoice shall be subject to exclusive jurisdiction of the Courts in Chennai alone.</span>';
    $pdf->writeHTML($html, true, false, true, false, '');
    $pdf->writeHTML($html3, true, false, true, false, '');

    $t = 'Wheel';
    $filename = $t . "-" . $id . ".pdf";
    ob_end_clean();
    $pdf->Output($filename, 'I');
    exit;
}
public function export()
{
   
       ini_set('memory_limit', '2048M');//Sets the value of the given configuration option

        ini_set('max_execution_time', 1200);

        $R = new PHPExcel();

        $R->getProperties()->setCreator("PVMYTVS")
       
            ->setTitle("Office 2007 XLSX School")
            ->setSubject("Office 2007 XLSX School")
            ->setDescription("School for Office 2007 XLSX.")
            ->setKeywords("office 2007 School")
            ->setCategory("School");

        $style = array(
            'alignment' => array(
                'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            )
        );

        $R->getDefaultStyle()->applyFromArray($style);

        $R->getActiveSheet()->getDefaultColumnDimension()->setWidth(19.57);

        $styleArray = array(
            'font' => array(
                'bold' => true,
                'color' => array(
                    'rgb' => 'FFFFFF'
                )
            ),
            'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                'startcolor' => array(
                    'rgb' => '4E5A7A'
                )
            )
        );



        $R->getActiveSheet()->getStyle('1')->applyFromArray($styleArray);

        
        $R->getActiveSheet(0)
        ->setCellValue('A1', 'SL No')
        ->setCellValue('B1', 'Wheel_id')
        ->setCellValue('C1', 'Wheel_name')
        ->setCellValue('D1', 'Created')
        ->setCellValue('E1', 'Box_of_wheel')
        ->setCellValue('F1', 'Location_of_every_wheel')
        
        
        ;
        $id = $this->params['pass'][0];//get id
        $datas = $this->Wheel->findById($id);
       // echo "<pre>";print_r($datas);exit;
        //foreach ($datas as $data) {
    
        $detail2=$datas['Wheel']['box_id'];
        $detail3=$datas['Wheel']['location_id'];
        $detail4=$datas['Wheel']['created'];

        //$datas = $this->Section->find('first',array('condition'=>'Section.id'=>$data['Student']['sec_id'],'fields'=>'Section.title'));
                

                $data1 = $this->Box->find('first', array('conditions' => array('Box.id' => $datas['Wheel']['box_id']), 'recursive' => -1));
                $data2 = $this->Location->find('first', array('conditions' => array('Location.id' => $datas['Wheel']['location_id']), 'recursive' => -1));
                //echo "<pre>";print_r($data1);exit;
        $i=2;
        $sn=1;
        $R->getActiveSheet()
        
        ->setCellValue("A" . $i, $sn)
        ->setCellValue("B" . $i, $id)
        ->setCellValue("C" . $i, $datas['Wheel']['name'])
        ->setCellValue("D" . $i, $datas['Wheel']['created'])
        ->setCellValue("E" . $i, $data1['Box']['name'])
        ->setCellValue("F" . $i, $data2['Location']['name']);
      //  }


        
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="Wheel_details.xlsx"');
        header('Cache-Control: max-age=0');
        ob_end_clean();
        $objWriter = PHPExcel_IOFactory::createWriter($R, 'Excel2007');
        $objWriter->save('php://output');
        exit;
}

}

?>