<?php

namespace App\Http\Controllers;

use App\Index;
use Illuminate\Support\Collection;
use Storage;

class IndexController extends Controller {

    public function index() {

        //$index = index::All;

        $index = new Index();
        $index->theme = 'このサイトのテーマ';
        $index->sub_theme = 'サイトのテーマについて軽く説明';
        $index->welcomes = 'WELCOME TO 
       <bold>
        ONASSIS
       </bold>. 
       <bold>
        A FREE BOOTSTRAP 3
       </bold> THEME. CRAFTED WITH LOVE BY 
       <bold>
        BLACKTIE.CO
       </bold>. <br> 
       <bold>
        IDEAL FOR
       </bold> AGENCIES &amp; FREELANCERS. ';

        $services = new Collection();
        $service1 = new Collection();
        $service1->place = 'London';
        $service1->image = '../image/s1.png';
        $service1->capture = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry¥'s standard dummy text ever.";
        $service2 = new Collection();
        $service2->place = 'Berlin';
        $service2->image = '../image/s2.png';
        $service2->capture = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry¥'s standard dummy text ever.";
        $service3 = new Collection();
        $service3->place = 'Paris';
        $service3->image = '../image/s3.png';
        $service3->capture = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry¥'s standard dummy text ever.";
        $service4 = new Collection();
        $service4->place = 'Tokyo';
        $service4->image = '../image/s4.png';
        $service4->capture = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry¥'s standard dummy text ever.";
        $services[] = $service1;
        $services[] = $service2;
        $services[] = $service3;
        $services[] = $service4;

        $smCharts = new Collection();
        $smChart1 = new Collection();
        $smChart1->product = 'JavaScript';
        $smChartDt1 = new Collection();
        $smChartDt1->value = 70;
        $smChartDt1->color = "#f85c37";
        $smChartDt2 = new Collection();
        $smChartDt2->value = 30;
        $smChartDt2->color = "#ecf0f1";
        $smChart1->push($smChartDt1);
        $smChart1->push($smChartDt2);
        $smCharts->push($smChart1);

        $smChart2 = new Collection();
        $smChart2->product = 'Bootstrap';
        $smChartDt3 = new Collection();
        $smChartDt3->value = 30;
        $smChartDt3->color = "#f85c37";
        $smChartDt4 = new Collection();
        $smChartDt4->value = 70;
        $smChartDt4->color = "#ecf0f1";
        $smChart2->push($smChartDt3);
        $smChart2->push($smChartDt4);
        $smCharts->push($smChart2);


        $smChart3 = new Collection();
        $smChart3->product = 'Laravel';
        $smChartDt5 = new Collection();
        $smChartDt5->value = 80;
        $smChartDt5->color = "#f85c37";
        $smChartDt6 = new Collection();
        $smChartDt6->value = 20;
        $smChartDt6->color = "#ecf0f1";
        $smChart3->push($smChartDt5);
        $smChart3->push($smChartDt6);

        $smCharts->push($smChart3);
        //TODO next cool works
        $exists = Storage::disk('local')->exists('someChart.json');
        if ($exists) {
            $contents = Storage::get("someChart.json");
            $contentsJon = json_decode($contents, false);
        }
        $index->services = $services;
        $index->smCharts = $smCharts;
        return view('index')->with('index', $index);
    }
    public function chatsJson() {
        $exists = Storage::disk('local')->exists('someChart.json');
        $contentsJon = null;
        if ($exists) {
            $contents = Storage::get("someChart.json");
            $contentsJon = json_decode($contents, false);
        }
        
        return response()
            ->json($contentsJon);
    }
    public function create() {
        return view('index.create');
    }

    public function detail() {
        $id = $request->input('id');
        $index = index::find($id);
        return view('index.detail')->with('index', $index);
    }

    public function update() {
        return view('index.update');
    }

    public function delete() {
        return view('index.delete');
    }

}
