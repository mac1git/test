<?php // app/Http/Controllers/PagesController.php
 
// ...
 
class PagesController extends Controller {
    public function about()
    {
        // 配列に値をセット
        $data = [
            'first_name' => 'Luke',
            'last_name' => 'Skywaler'
                 ];
 
        // view関数の第２引数に配列を渡す
        return view('pages.about', $data);        
 
        /* 以前のコード
        return view('pages.about');
        */
    }
 
    // ...
}
