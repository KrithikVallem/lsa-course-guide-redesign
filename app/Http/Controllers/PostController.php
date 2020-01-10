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
        // Use the posted searchQueryUrl to retrieve the xml from the lsa course guide api
        $searchResultsXML = simplexml_load_file($request->queryUrl);

        // convert the xml to json, and then into a php array so it can be returned
        $searchResultsJSON = json_encode($searchResultsXML);
        $searchResultsArray = json_decode($searchResultsJSON);
        
        // then use a return statement to return and simultaneously convert the array back to json
        return response()->json($searchResultsArray);
    }


    public function scheduleFunction(Request $request)
    {
        // get schedule info JSON from the api
        $scheduleJSON = file_get_contents($request->scheduleUrl);
        console.log(scheduleJSON);
        console.log($request->scheduleUrl);

        // convert json into a php array so it can be returned
        $scheduleArray = json_decode($scheduleJSON);
        
        // then use a return statement to return and simultaneously convert the array back to json
        return response()->json($request);
    }
}