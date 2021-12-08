<?php

namespace App\Http\Controllers;

use countword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CommandeController extends Controller
{
    public function index()
    {

       return view('pages.commande');
    }



    public function valider(REQUEST $request)
    {
      return 'Well';
    }




    public function count_word_file(REQUEST $request)
    {

      $count = 0;  
      $data = array();

      $validator = Validator::make($request->all(), [
        'file' => 'required|mimes:pdf,docx,doc'
     ]);

     if ($validator->fails()) {

      $data['success'] = 0;
      $data['error'] = $validator->errors()->first('file');// Error response

     }else{

      if($request->file('file')) {

        $file = $request->file('file');
        $filename = time().'_'.$file->getClientOriginalName();//File name
        // File extension
        $extension = $file->getClientOriginalExtension();

        // File upload location
        $location = 'files';

        // Upload file
        //  $file->move($location,$filename);
        $filepath = $request->file('file')->storeAs('files/',$filename,'public');
        
        if ($extension=='doc' || $extension=='docx' ) {
          $counter = new countword();
          $count  = $counter->count($request['file']);
        }
       if ($extension=='pdf') {
         $parser = new \Smalot\PdfParser\Parser();
         $pdf = $parser->parseFile($request['file']);
         // $pdf = $parser->parseFile("./public/");
  
         $text = $pdf->getText();
         $pages  = $pdf->getPages();
         // $text = trim( $text );
         // $text = str_replace( "", " ", $text );
         //  echo  $text;
         $count =  str_word_count( $text );
         // $count =  strlen( $text );
         
       }



  
      

        // Response
        $data['success'] = 1;
        $data['message'] = 'Uploaded Successfully!';
        $data['filepath'] = $filepath;
        $data['extension'] = $extension;
        $data['chaine'] = $count;
        // $data['page'] = $pages;
          }else{
              // Response
              $data['success'] = 2;
              $data['message'] = 'File not uploaded.'; 
          }
     }






      return response()->json($data, 200,);
    }






    public function tarif()
    {
     return view('pages.tarif');
    }









}
