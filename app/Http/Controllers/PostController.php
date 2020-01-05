<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class PostController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function formSubmit(Request $request)
    {
        // make xml api string here from form data recieved
        // then call xml file
        // then use a return statement to return and simultaneously json_encode the xml
        
        return response()->json([$request->all()]);
    }


    // add an onPageLoad function here also, in case user enters specific url
    // for this function, just use the posted information directly, no need to make the xml api string
}