<?php // app/Http/Controllers/PagesController.php
 
// ...
 
class PagesController extends Controller {
    public function about()
    {
        // 配列に値をセット
        $data = [];
        $data["first_name"] = "Luke";
        $data["last_name"] = "Skywalker";
 
        // view関数の第２引数に配列を渡す
        return view('pages.about', $data);        
 
        /* 以前のコード
        return view('pages.about');
        */
    }
 
    // ...
}
