<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $kategori_berita = \DB::table('kategori_beritas')->get();
        $hot_articles = \DB::table('beritas as a')
        ->select(
            'a.*',
            'b.nama as category_name'
            )
        ->leftJoin('kategori_beritas as b', 'a.kategori_id', '=', 'b.id')
        ->orderBy('a.id', 'desc')->skip(1)->take(5)->get();

        $fast_news_articles = \DB::table('beritas as a')
        ->select(
            'a.*',
            'b.nama as category_name'
        )
        ->leftJoin('kategori_beritas as b', 'a.kategori_id', '=', 'b.id')
        ->where('kategori_id', 5)->orderBy('a.id', 'desc')->take(3)->get();

        $popular_articles = \DB::table('beritas as a')
        ->select(
            'a.*',
            'b.nama as category_name'
        )
        ->leftJoin('kategori_beritas as b', 'a.kategori_id', '=', 'b.id')
        ->where('kategori_id', 1)->orderBy('a.id', 'desc')->first();

        $popular_articles2 = \DB::table('beritas as a')
        ->select(
            'a.*',
            'b.nama as category_name'
        )
        ->leftJoin('kategori_beritas as b', 'a.kategori_id', '=', 'b.id')
        ->where('kategori_id', 1)->orderBy('a.id', 'desc')->skip(1)->take(1)->get();

        $popular_articles3 = \DB::table('beritas as a')
        ->select(
            'a.*',
            'b.nama as category_name'
        )
        ->leftJoin('kategori_beritas as b', 'a.kategori_id', '=', 'b.id')
        ->where('kategori_id', 1)->orderBy('a.id', 'desc')->skip(2)->take(3)->get();

        $high_tech_articles = \DB::table('beritas as a')
        ->select(
            'a.*',
            'b.nama as category_name'
        )
        ->leftJoin('kategori_beritas as b', 'a.kategori_id', '=', 'b.id')
        ->where('kategori_id', 2)->orderBy('a.id', 'desc')->first();

        $high_tech_articles2 = \DB::table('beritas as a')
        ->select(
            'a.*',
            'b.nama as category_name'
        )
        ->leftJoin('kategori_beritas as b', 'a.kategori_id', '=', 'b.id')
        ->where('kategori_id', 2)->orderBy('a.id', 'desc')->skip(1)->take(5)->get();

        $future_tech_articles = \DB::table('beritas as a')
        ->select(
            'a.*',
            'b.nama as category_name'
        )
        ->leftJoin('kategori_beritas as b', 'a.kategori_id', '=', 'b.id')
        ->where('kategori_id', 3)->orderBy('a.id', 'desc')->take(1)->get();

        $future_tech_articles2 = \DB::table('beritas as a')
        ->select(
            'a.*',
            'b.nama as category_name'
        )
        ->leftJoin('kategori_beritas as b', 'a.kategori_id', '=', 'b.id')
        ->where('kategori_id', 3)->orderBy('a.id', 'desc')->skip(2)->take(1)->get();

        $future_tech_articles3 = \DB::table('beritas as a')
        ->select(
            'a.*',
            'b.nama as category_name'
        )
        ->leftJoin('kategori_beritas as b', 'a.kategori_id', '=', 'b.id')
        ->where('kategori_id', 3)->orderBy('a.id', 'desc')->skip(3)->take(1)->get();

        $future_tech_articles4 = \DB::table('beritas as a')
        ->select(
            'a.*',
            'b.nama as category_name'
        )
        ->leftJoin('kategori_beritas as b', 'a.kategori_id', '=', 'b.id')
        ->where('kategori_id', 3)->orderBy('a.id', 'desc')->skip(1)->take(1)->get();

        $future_tech_articles5 = \DB::table('beritas as a')
        ->select(
            'a.*',
            'b.nama as category_name'
        )
        ->leftJoin('kategori_beritas as b', 'a.kategori_id', '=', 'b.id')
        ->where('kategori_id', 3)->orderBy('a.id', 'desc')->skip(4)->take(3)->get();

        $creative_articles = \DB::table('beritas as a')
        ->select(
            'a.*',
            'b.nama as category_name'
        )
        ->leftJoin('kategori_beritas as b', 'a.kategori_id', '=', 'b.id')
        ->where('kategori_id', 4)->orderBy('a.id', 'desc')->take(4)->get();

        $uniq_articles = \DB::table('beritas as a')
        ->select(
            'a.*',
            'b.nama as category_name'
        )
        ->leftJoin('kategori_beritas as b', 'a.kategori_id', '=', 'b.id')
        ->where('kategori_id', 5)->orderBy('a.id', 'desc')->take(4)->get();

        $all_articles = \DB::table('beritas as a')
        ->select(
            'a.*',
            'b.nama as category_name',
            'c.name as created_by'
            )
        ->leftJoin('kategori_beritas as b', 'a.kategori_id', '=', 'b.id')
        ->leftJoin('users as c', 'a.created_by', '=', 'c.id')
        ->orderBy('a.id', 'desc')->get();

        $kategori_pemerintahan = \DB::table('kategori_pemerintahans')->get();
        $info_pemerintahan = \DB::table('pemerintahans')->get();
        // dd($all_articles);
        return view('welcome',
        [
            'category_berita' => $kategori_berita,
            'hot_articles' => $hot_articles,
            'fast_news_articles' => $fast_news_articles,

            'popular_articles' => $popular_articles,
            'popular_articles2' => $popular_articles2,
            'popular_articles3' => $popular_articles3,

            'high_tech_articles' => $high_tech_articles,
            'high_tech_articles2' => $high_tech_articles2,

            'future_tech_articles' => $future_tech_articles,
            'future_tech_articles2' => $future_tech_articles2,
            'future_tech_articles3' => $future_tech_articles3,
            'future_tech_articles4' => $future_tech_articles4,
            'future_tech_articles5' => $future_tech_articles5,

            'creative_articles' => $creative_articles,
            'uniq_articles' => $uniq_articles,
            'all_articles' => $all_articles,
            'category_pemerintahan' => $kategori_pemerintahan,
            'info_pemerintahan' => $info_pemerintahan,
        ]);
    }

    public function contact()
    {
        $kategori_berita = \DB::table('kategori_beritas')->get();

        return view('client.contact.index',[
            'category_berita' => $kategori_berita,
        ]);
    }

    public function showNews($id)
    {
        $kategori_berita = \DB::table('kategori_beritas')->get();

        $categories_news = \DB::table('kategori_beritas')
        ->where('nama', $id)->first();

        $all_articles = \DB::table('beritas as a')
        ->select(
            'a.*',
            'b.nama as category_name',
            'c.name as created_by'
        )
        ->leftJoin('kategori_beritas as b', 'a.kategori_id', '=', 'b.id')
        ->leftJoin('users as c', 'a.created_by', '=', 'c.id')
        ->where('kategori_id', $categories_news->id)->orderBy('a.id', 'desc')->get();

        $creative_articles = \DB::table('beritas as a')
        ->select(
            'a.*',
            'b.nama as category_name'
        )
        ->leftJoin('kategori_beritas as b', 'a.kategori_id', '=', 'b.id')
        ->where('kategori_id', 4)->orderBy('a.id', 'desc')->take(4)->get();

        $uniq_articles = \DB::table('beritas as a')
        ->select(
            'a.*',
            'b.nama as category_name'
        )
        ->leftJoin('kategori_beritas as b', 'a.kategori_id', '=', 'b.id')
        ->where('kategori_id', 5)->orderBy('a.id', 'desc')->take(4)->get();


        // dd($all_articles);
        return view('client.categories.list-news',
        [
            'category_berita' => $kategori_berita,
            'category_name' => $id,
            'all_articles' => $all_articles,
            'creative_articles' => $creative_articles,
            'uniq_articles' => $uniq_articles,
        ]);
    }

    public function showDetailNews($id)
    {
        $kategori_berita = \DB::table('kategori_beritas')->get();
        $berita_now = \DB::table('beritas')
        ->where('slug', $id)->first();
        // dd($berita_now->kategori_id);

        $creative_articles = \DB::table('beritas as a')
        ->select(
            'a.*',
            'b.nama as category_name'
        )
        ->leftJoin('kategori_beritas as b', 'a.kategori_id', '=', 'b.id')
        ->where('kategori_id', 4)->orderBy('a.id', 'desc')->take(4)->get();

        $uniq_articles = \DB::table('beritas as a')
        ->select(
            'a.*',
            'b.nama as category_name'
        )
        ->leftJoin('kategori_beritas as b', 'a.kategori_id', '=', 'b.id')
        ->where('kategori_id', 5)->orderBy('a.id', 'desc')->take(4)->get();

        $all_articles = \DB::table('beritas as a')
        ->select(
            'a.*',
            'b.nama as category_name',
            'c.name as created_by',
            'd.nama as tag_name'
            )
        ->leftJoin('kategori_beritas as b', 'a.kategori_id', '=', 'b.id')
        ->leftJoin('users as c', 'a.created_by', '=', 'c.id')
        ->leftJoin('tag_beritas as d', 'a.tag_id', '=', 'd.id')
        ->where('slug', $id)->first();

        $other_articles = \DB::table('beritas as a')
        ->select(
            'a.*',
            'b.nama as category_name',
            'c.name as created_by'
        )
        ->leftJoin('kategori_beritas as b', 'a.kategori_id', '=', 'b.id')
        ->leftJoin('users as c', 'a.created_by', '=', 'c.id')
        ->where('kategori_id', '=', $berita_now->kategori_id)
        ->where('slug', '!=', $id)->orderBy('a.id', 'desc')->take(3)->get();
        // dd($other_articles);

        $tag = \DB::table('tag_beritas')
            ->select(
                '*',
            )
            ->get();

        $tag_selected = [];
        $tag_s = [];
        $tag_all = [];
        $tags = \explode(",", $all_articles->tag_id);

        for ($i=0; $i < count($tags); $i++) {
            $datas = \DB::table('tag_beritas as a')
            ->select(
                'a.*',
            )
            ->where('a.id', $tags[$i])
            ->first();

            array_push($tag_s, $datas->id);
        }

        for ($i=0; $i < count($tags); $i++) {
            $datas = \DB::table('tag_beritas as a')
            ->select(
                'a.*',
            )
            ->where('a.id', $tags[$i])
            ->first();

            array_push($tag_selected, $datas);
        }

        foreach ($tag as $key => $value) {
            array_push($tag_all, $value->id);
        }

        // dd($tag_selected);
        return view('client.news.index',
        [
            'category_berita' => $kategori_berita,
            'creative_articles' => $creative_articles,
            'uniq_articles' => $uniq_articles,
            'all_articles' => $all_articles,
            'other_articles' => $other_articles,
            'tag_selected' => $tag_selected,
        ]);
    }

    public function searchArticles($id)
    {
        // dd($id);
        $all_articles = \DB::table('beritas as a')
        ->select(
            'a.*',
            'b.nama as category_name',
            'c.name as created_by'
        )
        ->leftJoin('kategori_beritas as b', 'a.kategori_id', '=', 'b.id')
        ->leftJoin('users as c', 'a.created_by', '=', 'c.id')
        ->where('judul', 'LIKE', '%' . $id . '%')->orderBy('a.id', 'desc')->get();

        // dd($all_articles);
        if (empty($all_articles)) {
            return response()->json('not found');
        }

        // return response()->json($articles, 200);

        $kategori_berita = \DB::table('kategori_beritas')->get();

        return view('client.search.articles',[
            'category_berita' => $kategori_berita,
            'query' => $id,
            'all_articles' => $all_articles,
            ]
        );

    }

}
