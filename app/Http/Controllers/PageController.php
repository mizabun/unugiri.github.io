<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Produk;
use illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class PageController extends Controller
{
    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function dashboardOverview1()
    {
        return view('pages/dashboard-overview-1', [
            // Specify the base layout.
            // Eg: 'side-menu', 'simple-menu', 'top-menu', 'login'
            // The default value is 'side-menu'

            // 'layout' => 'side-menu'
        ]);
    }

    // /**
    //  * Show specified view.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function dashboardOverview2()
    // {
    //     return view('pages/dashboard-overview-2');
    // }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function dashboardOverview3()
    {
        return view('pages/dashboard-overview-3');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function dashboardOverview4()
    {
        return view('pages/dashboard-overview-4');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function inbox()
    {
        return view('pages/inbox');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function fileManager()
    {
        return view('pages/file-manager');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function catatan()
    {
        $produk = Produk::all();
        return view('pages/catatan', compact(['produk']));
        // return view('pages/point-of-sale');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logOut()
    {
        return view('login.main', [
            'layout' => 'login'
        ]);
    }
    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function pointOfSale()
    {
        $produk = Produk::all();
        return view('pages/point-of-sale', compact(['produk']));
        // return view('pages/point-of-sale');
    }


    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function chat()
    {
        return view('pages/chat');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function post()
    {
        return view('pages/post');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function calendar()
    {
        return view('pages/calendar');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function crudDataList()
    {
        $produk = Produk::all();
        return view('pages/crud-data-list', compact(['produk']));
        // dd($produk);
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function update()
    // {
    //     return view('pages/update');
    // }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateData(Request $request)
    {
        // DB::table('produk')->insert([
        //     'nama_produk' => $request->nama_produk,
        //     'kategori_produk' => $request->kategori_produk,
        //     'jumlah_produk' => $request->jumlah_produk,
        //     'harga_produk' => $request->harga_produk
        // ]);
        // $data = Produk::create($request->except(['_token', 'submit']));
        // // Produk::create($request->all());
        // if ($request->hasFile('gambar_produl')) {
        //     $request->file('gambar_produk')->move('gambar_produk/', $request->file('gambar_produk')->getClientOriginalName());
        //     $data->foto = $request->file('gambar_produk')->getClientOriginalName();
        //     $data->save();
        // }
        // return redirect(view('pages/crud-data-list'));
        dd($request->all());
        // $request->validate([
        //     'nama_produk' => 'required',
        //     'kategori_produk' => 'required',
        //     'jumlah_produk' => 'required',
        //     'harga_produk' => 'required',
        //     'gambar_produk' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        // ]);

        $input = $request->all();
        dd($input);
        // if ($gambar_produk = $request->file(key: 'image')) {
        //     $destinationPath = 'produk/';
        //     $produkImage = date(format: 'YmdHis') . "." . $gambar_produk->getClientOriginalExtension();
        //     $gambar_produk->move($destinationPath, $produkImage);
        //     $input['gambar_produk'] = "$produkImage";
        // }
        // Produk::create($input);
        // return redirect(view('pages/crud-data-list'));
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function crudForm()
    {
        return view('pages/crud-form');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function usersLayout1()
    {
        return view('pages/users-layout-1');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function usersLayout2()
    {
        return view('pages/users-layout-2');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function usersLayout3()
    {
        return view('pages/users-layout-3');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function profileOverview1()
    {
        return view('pages/profile-overview-1');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function profileOverview2()
    {
        return view('pages/profile-overview-2');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function profileOverview3()
    {
        return view('pages/profile-overview-3');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function wizardLayout1()
    {
        return view('pages/wizard-layout-1');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function wizardLayout2()
    {
        return view('pages/wizard-layout-2');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function wizardLayout3()
    {
        return view('pages/wizard-layout-3');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function blogLayout1()
    {
        return view('pages/blog-layout-1');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function blogLayout2()
    {
        return view('pages/blog-layout-2');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function blogLayout3()
    {
        return view('pages/blog-layout-3');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function pricingLayout1()
    {
        return view('pages/pricing-layout-1');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function pricingLayout2()
    {
        return view('pages/pricing-layout-2');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function invoiceLayout1()
    {
        return view('pages/invoice-layout-1');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function invoiceLayout2()
    {
        return view('pages/invoice-layout-2');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function faqLayout1()
    {
        return view('pages/faq-layout-1');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function faqLayout2()
    {
        return view('pages/faq-layout-2');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function faqLayout3()
    {
        return view('pages/faq-layout-3');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('pages/login');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('pages/register');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function errorPage()
    {
        return view('pages/error-page');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateProfile()
    {
        return view('pages/update-profile');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function changePassword()
    {
        return view('pages/change-password');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function regularTable()
    {
        return view('pages/regular-table');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tabulator()
    {
        return view('pages/tabulator');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function modal()
    {
        return view('pages/modal');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function slideOver()
    {
        return view('pages/slide-over');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function notification()
    {
        return view('pages/notification');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tab()
    {
        return view('pages/tab');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function accordion()
    {
        return view('pages/accordion');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function button()
    {
        return view('pages/button');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function alert()
    {
        return view('pages/alert');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function progressBar()
    {
        return view('pages/progress-bar');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tooltip()
    {
        return view('pages/tooltip');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function dropdown()
    {
        return view('pages/dropdown');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function typography()
    {
        return view('pages/typography');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function icon()
    {
        return view('pages/icon');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function invoice()
    {
        $produk = Produk::all();
        return view('pages/invoice', compact(['produk']));
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function laporanDataKinerja()
    {
        $produk = Produk::all();
        return view('pages/laporan-data-kinerja', compact(['produk']));
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function loadingIcon()
    {
        return view('pages/loading-icon');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function regularForm()
    {
        return view('pages/regular-form');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function datepicker()
    {
        return view('pages/datepicker');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tomSelect()
    {
        return view('pages/tom-select');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function fileUpload()
    {
        return view('pages/file-upload');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function wysiwygEditorClassic()
    {
        return view('pages/wysiwyg-editor-classic');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function wysiwygEditorInline()
    {
        return view('pages/wysiwyg-editor-inline');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function wysiwygEditorBalloon()
    {
        return view('pages/wysiwyg-editor-balloon');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function wysiwygEditorBalloonBlock()
    {
        return view('pages/wysiwyg-editor-balloon-block');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function wysiwygEditorDocument()
    {
        return view('pages/wysiwyg-editor-document');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function validation()
    {
        return view('pages/validation');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function chart()
    {
        return view('pages/chart');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function slider()
    {
        return view('pages/slider');
    }

    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function imageZoom()
    {
        return view('pages/image-zoom');
    }
}
