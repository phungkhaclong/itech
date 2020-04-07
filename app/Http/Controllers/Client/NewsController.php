<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    protected function getTypes() {
        return [
            'tin-noi-bo' => 'Tin nội bộ',
            'tin-cong-nghe' => 'Tin công nghệ',
            'su-kien' => 'Sự kiện',
            'tuyen-sinh' => "Tin tuyển sinh",
            'ky-su-nhat-ban' => "kỹ sư nhật bản",
            'thuc-tap-nhat-ban' => "Thực tập nhật bản",
            'du-hoc-han-quoc' => "du học hàn quốc"
        ];
    }

    public function index() {
        $types = $this->getTypes();
        $news = News::latest()->take(23)->get();
        $topNews = $news->take(5);
        $internalNews = $news
            ->skip(5)
            ->where("type", "tin-noi-bo")
            ->take(3);
        $techNews = $news
            ->skip(5)
            ->where("type", "tin-cong-nghe")
            ->take(3);
        $events = $news
            ->skip(5)
            ->where("type", "su-kien")
            ->take(3);

        return view("client.news.index", compact(
            'topNews',
            'internalNews', 
            'techNews',
            'events',
            'types'
        ));
    }

    public function showNewsByType(Request $request) {
        $types = $this->getTypes();
        if($request->is('*/tin-noi-bo')) {
            $topNewsFilter = News::latest()->where('type', 'tin-noi-bo')->take(5);
            $topNews = $topNewsFilter->get();
            $ids = $topNewsFilter->select('id')->get();
            $news = News::where("type", "tin-noi-bo") 
                ->latest()
                ->whereNotIn('id', $ids)
                ->paginate(6);
        } else if($request->is('*/tin-cong-nghe')) {
            $topNewsFilter = News::latest()->where('type', 'tin-cong-nghe')->take(5);
            $topNews = $topNewsFilter->get();
            $ids = $topNewsFilter->select('id')->get();
            $news = News::where("type", "tin-cong-nghe")
                ->latest()
                ->whereNotIn('id', $ids)
                ->paginate(6);
        } else if($request->is('*/su-kien')) {
            $topNewsFilter = News::latest()->where('type', 'su-kien')->take(5);
            $topNews = $topNewsFilter->get();
            $ids = $topNewsFilter->select('id')->get();
            $news = News::where("type", "su-kien")
                ->latest()
                ->whereNotIn('id', $ids)
                ->paginate(6);
        } else if($request->is('*/ky-su-nhat-ban')) {
            $topNewsFilter = News::latest()->where('type', 'ky-su-nhat-ban')->take(5);
            $topNews = $topNewsFilter->get();
            $ids = $topNewsFilter->select('id')->get();
            $news = News::where("type", "ky-su-nhat-ban")
                ->latest()
                ->whereNotIn('id', $ids)
                ->paginate(6);
        } else if($request->is('*/thuc-tap')) {
            $topNewsFilter = News::latest()->where('type', 'thuc-tap-nhat-ban')->take(5);
            $topNews = $topNewsFilter->get();
            $ids = $topNewsFilter->select('id')->get();
            $news = News::where("type", "thuc-tap-nhat-ban")
                ->latest()
                ->whereNotIn('id', $ids)
                ->paginate(6);
        } else {
            $topNewsFilter = News::latest()->where('type', 'du-hoc-han-quoc')->take(5);
            $topNews = $topNewsFilter->get();
            $ids = $topNewsFilter->select('id')->get();
            $news = News::where("type", "du-hoc-han-quoc")
                ->latest()
                ->whereNotIn('id', $ids)
                ->paginate(6);
        }
        if ($request->ajax()) {
            $view = view('client.news.data', compact('news'))->render();
            return response()->json(['html'=>$view]);
        }
        return view("client.news.newsByType", compact('news', 'topNews', 'types'));
    }

    public function show($slug)
    {
        $news = News::where("slug", $slug)->first();
        return view('client.news.details', compact('news'));
    }
}
