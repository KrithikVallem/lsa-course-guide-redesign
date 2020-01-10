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
    public function searchFunction(Request $request)
    {
        // Use the posted searchQueryUrl to retrieve the xml from the actual lsa course guide
        $searchResultsXML = simplexml_load_file($request->queryUrl);

        // convert the xml to json, and then into a php array so it can be returned by laravel
        $searchResultsJSON = json_encode($searchResultsXML);
        $searchResultsArray = json_decode($searchResultsJSON);
        
        // then use a return statement to return and simultaneously convert the array back to json
        return response()->json($searchResultsArray);
    }
}