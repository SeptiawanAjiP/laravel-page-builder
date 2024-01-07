<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $html = '<body style="box-sizing: border-box; margin: 0;">
        <table class="main-body" style="box-sizing: border-box; min-height: 150px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; padding-left: 5px; width: 100%; height: 100%; background-color: rgb(234, 236, 237);" width="100%" height="100%" bgcolor="rgb(234, 236, 237)">
          <tbody style="box-sizing: border-box;">
            <tr class="row" style="box-sizing: border-box; vertical-align: top;" valign="top">
              <td id="iuqt" class="main-body-cell" style="box-sizing: border-box;">
                <table class="container" style="box-sizing: border-box; font-family: Helvetica, serif; min-height: 150px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; padding-left: 5px; margin-top: auto; margin-right: auto; margin-bottom: auto; margin-left: auto; height: 0px; width: 90%; max-width: 550px;" width="90%" height="0">
                  <tbody style="box-sizing: border-box;">
                    <tr style="box-sizing: border-box;">
                      <td class="container-cell" style="box-sizing: border-box; vertical-align: top; font-size: medium; padding-bottom: 50px;" valign="top">
                        <table class="table100 c1790" style="box-sizing: border-box; width: 100%; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; padding-left: 5px; height: 0px; min-height: 30px; border-collapse: separate; margin-top: 0px; margin-right: 0px; margin-bottom: 10px; margin-left: 0px;" width="100%" height="0">
                          <tbody style="box-sizing: border-box;">
                            <tr style="box-sizing: border-box;">
                              <td id="c1793" class="top-cell" style="box-sizing: border-box; text-align: right; color: rgb(152, 156, 165);" align="right">
                                <u id="c307" class="browser-link" style="box-sizing: border-box; font-size: 12px;">View in browser
                                </u>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <table class="c1766" style="box-sizing: border-box; margin-top: 0px; margin-right: auto; margin-bottom: 10px; margin-left: 0px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; padding-left: 5px; width: 100%; min-height: 30px;" width="100%">
                          <tbody style="box-sizing: border-box;">
                            <tr style="box-sizing: border-box;">
                              <td class="cell c1769" style="box-sizing: border-box; width: 11%;" width="11%">
                                <img src="https://grapesjs.com/img/grapesjs-logo.png" alt="GrapesJS." class="c926" style="box-sizing: border-box; color: rgb(158, 83, 129); width: 100%; font-size: 50px;">
                              </td>
                              <td class="cell c1776" style="box-sizing: border-box; width: 70%; vertical-align: middle;" width="70%" valign="middle">
                                <div id="iio6w" class="c1144" style="box-sizing: border-box; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px; font-size: 17px; font-weight: 300;">GrapesJS Newsletter Builder
                                  <br style="box-sizing: border-box;">
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <table id="itabsk" style="box-sizing: border-box; height: 150px; margin: 0 auto 10px auto; padding: 5px 5px 5px 5px; width: 100%;" width="100%" height="150">
                          <tbody style="box-sizing: border-box;">
                            <tr style="box-sizing: border-box;">
                              <td id="ix0dik" style="box-sizing: border-box; font-size: 12px; font-weight: 300; vertical-align: top; color: rgb(111, 119, 125); margin: 0; padding: 0; width: 50%;" width="50%" valign="top">
                              </td>
                              <td id="ib5xul" style="box-sizing: border-box; font-size: 12px; font-weight: 300; vertical-align: top; color: rgb(111, 119, 125); margin: 0; padding: 0; width: 50%;" width="50%" valign="top">
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <table class="card" style="box-sizing: border-box; min-height: 150px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; padding-left: 5px; margin-bottom: 20px; height: 0px;" height="0">
                          <tbody style="box-sizing: border-box;">
                            <tr style="box-sizing: border-box;">
                              <td class="card-cell" style="box-sizing: border-box; background-color: rgb(255, 255, 255); overflow-x: hidden; overflow-y: hidden; border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; text-align: center;" bgcolor="rgb(255, 255, 255)" align="center">
                                <img src="https://grapesjs.com/img/tmp-header-txt.jpg" alt="Big image here" class="c1271" style="box-sizing: border-box; width: 100%; margin-top: 0px; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; font-size: 50px; color: rgb(120, 197, 214); line-height: 250px; text-align: center;">
                                <table class="table100 c1357" style="box-sizing: border-box; width: 100%; min-height: 150px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; padding-left: 5px; height: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; border-collapse: collapse;" width="100%" height="0">
                                  <tbody style="box-sizing: border-box;">
                                    <tr style="box-sizing: border-box;">
                                      <td id="i4frb" class="card-content" style="box-sizing: border-box; font-size: 13px; line-height: 20px; color: rgb(111, 119, 125); padding-top: 10px; padding-right: 20px; padding-bottom: 0px; padding-left: 20px; vertical-align: top;" valign="top">
                                        <h1 class="card-title" style="box-sizing: border-box; font-size: 25px; font-weight: 300; color: rgb(68, 68, 68);">Build your newsletters faster than ever
                                          <br style="box-sizing: border-box;">
                                        </h1>
                                        <p class="card-text" style="box-sizing: border-box;">Import, build, test and export responsive newsletter templates faster than ever using the GrapesJS Newsletter Builder.
                                        </p>
                                        <a id="i5xqyj" class="button" style="box-sizing: border-box; font-size: 12px; padding-top: 10px; padding-right: 20px; padding-bottom: 10px; padding-left: 20px; background-color: rgb(217, 131, 166); color: rgb(255, 255, 255); text-align: center; border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; font-weight: 300;">Button</a>
                                        <table class="c1542" style="box-sizing: border-box; margin-top: 0px; margin-right: auto; margin-bottom: 10px; margin-left: auto; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; padding-left: 5px; width: 100%;" width="100%">
                                          <tbody style="box-sizing: border-box;">
                                            <tr style="box-sizing: border-box;">
                                              <td id="c1545" class="card-footer" style="box-sizing: border-box; padding-top: 20px; padding-right: 0px; padding-bottom: 20px; padding-left: 0px; text-align: center;" align="center">
                                                <a href="https://github.com/grapesjs/grapesjs" class="button" style="box-sizing: border-box; font-size: 12px; padding-top: 10px; padding-right: 20px; padding-bottom: 10px; padding-left: 20px; background-color: rgb(217, 131, 166); color: rgb(255, 255, 255); text-align: center; border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; font-weight: 300;">Free and Open Source
                                                </a>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <table class="list-item" style="box-sizing: border-box; height: auto; width: 100%; margin-top: 0px; margin-right: auto; margin-bottom: 10px; margin-left: auto; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; padding-left: 5px;" width="100%">
                          <tbody style="box-sizing: border-box;">
                            <tr style="box-sizing: border-box;">
                              <td class="list-item-cell" style="box-sizing: border-box; background-color: rgb(255, 255, 255); border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; overflow-x: hidden; overflow-y: hidden; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px;" bgcolor="rgb(255, 255, 255)">
                                <table class="list-item-content" style="box-sizing: border-box; border-collapse: collapse; margin-top: 0px; margin-right: auto; margin-bottom: 0px; margin-left: auto; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; padding-left: 5px; height: 150px; width: 100%;" width="100%" height="150">
                                  <tbody style="box-sizing: border-box;">
                                    <tr class="list-item-row" style="box-sizing: border-box;">
                                      <td class="list-cell-left" style="box-sizing: border-box; width: 30%; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px;" width="30%">
                                        <img src="https://grapesjs.com/img/tmp-blocks.jpg" alt="Image1" class="list-item-image" style="box-sizing: border-box; color: rgb(217, 131, 166); font-size: 45px; width: 100%;">
                                      </td>
                                      <td class="list-cell-right" style="box-sizing: border-box; width: 70%; color: rgb(111, 119, 125); font-size: 13px; line-height: 20px; padding-top: 10px; padding-right: 20px; padding-bottom: 0px; padding-left: 20px;" width="70%">
                                        <h1 class="card-title" style="box-sizing: border-box; font-size: 25px; font-weight: 300; color: rgb(68, 68, 68);">Built-in Blocks
                                        </h1>
                                        <p class="card-text" style="box-sizing: border-box;">Drag and drop built-in blocks from the right panel and style them in a matter of seconds
                                        </p>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <table class="list-item" style="box-sizing: border-box; height: auto; width: 100%; margin-top: 0px; margin-right: auto; margin-bottom: 10px; margin-left: auto; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; padding-left: 5px;" width="100%">
                          <tbody style="box-sizing: border-box;">
                            <tr style="box-sizing: border-box;">
                              <td class="list-item-cell" style="box-sizing: border-box; background-color: rgb(255, 255, 255); border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; overflow-x: hidden; overflow-y: hidden; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px;" bgcolor="rgb(255, 255, 255)">
                                <table class="list-item-content" style="box-sizing: border-box; border-collapse: collapse; margin-top: 0px; margin-right: auto; margin-bottom: 0px; margin-left: auto; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; padding-left: 5px; height: 150px; width: 100%;" width="100%" height="150">
                                  <tbody style="box-sizing: border-box;">
                                    <tr class="list-item-row" style="box-sizing: border-box;">
                                      <td class="list-cell-left" style="box-sizing: border-box; width: 30%; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px;" width="30%">
                                        <img src="https://grapesjs.com/img/tmp-tgl-images.jpg" alt="Image2" class="list-item-image" style="box-sizing: border-box; color: rgb(217, 131, 166); font-size: 45px; width: 100%;">
                                      </td>
                                      <td class="list-cell-right" style="box-sizing: border-box; width: 70%; color: rgb(111, 119, 125); font-size: 13px; line-height: 20px; padding-top: 10px; padding-right: 20px; padding-bottom: 0px; padding-left: 20px;" width="70%">
                                        <h1 class="card-title" style="box-sizing: border-box; font-size: 25px; font-weight: 300; color: rgb(68, 68, 68);">Toggle images
                                        </h1>
                                        <p class="card-text" style="box-sizing: border-box;">Build a good looking newsletter even without images enabled by the email clients
                                        </p>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <table class="grid-item-row" style="box-sizing: border-box; margin-top: 0px; margin-right: auto; margin-bottom: 10px; margin-left: auto; padding-top: 5px; padding-right: 0px; padding-bottom: 5px; padding-left: 0px; width: 100%;" width="100%">
                          <tbody style="box-sizing: border-box;">
                            <tr style="box-sizing: border-box;">
                              <td class="grid-item-cell2-l" style="box-sizing: border-box; vertical-align: top; padding-right: 10px; width: 50%;" width="50%" valign="top">
                                <table class="grid-item-card" style="box-sizing: border-box; width: 100%; padding-top: 5px; padding-right: 0px; padding-bottom: 5px; padding-left: 0px; margin-bottom: 10px;" width="100%">
                                  <tbody style="box-sizing: border-box;">
                                    <tr style="box-sizing: border-box;">
                                      <td class="grid-item-card-cell" style="box-sizing: border-box; background-color: rgb(255, 255, 255); overflow-x: hidden; overflow-y: hidden; border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; text-align: center; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px;" bgcolor="rgb(255, 255, 255)" align="center">
                                        <img src="https://grapesjs.com/img/tmp-send-test.jpg" alt="Image1" class="grid-item-image" style="box-sizing: border-box; line-height: 150px; font-size: 50px; color: rgb(120, 197, 214); margin-bottom: 15px; width: 100%;">
                                        <table class="grid-item-card-body" style="box-sizing: border-box;">
                                          <tbody style="box-sizing: border-box;">
                                            <tr style="box-sizing: border-box;">
                                              <td class="grid-item-card-content" style="box-sizing: border-box; font-size: 13px; color: rgb(111, 119, 125); padding-top: 0px; padding-right: 10px; padding-bottom: 20px; padding-left: 10px; width: 100%; line-height: 20px;" width="100%">
                                                <h1 class="card-title" style="box-sizing: border-box; font-size: 25px; font-weight: 300; color: rgb(68, 68, 68);">Test it
                                                </h1>
                                                <p class="card-text" style="box-sizing: border-box;">You can send email tests directly from the editor and check how are looking on your email clients
                                                </p>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                              <td class="grid-item-cell2-r" style="box-sizing: border-box; vertical-align: top; padding-left: 10px; width: 50%;" width="50%" valign="top">
                                <table class="grid-item-card" style="box-sizing: border-box; width: 100%; padding-top: 5px; padding-right: 0px; padding-bottom: 5px; padding-left: 0px; margin-bottom: 10px;" width="100%">
                                  <tbody style="box-sizing: border-box;">
                                    <tr style="box-sizing: border-box;">
                                      <td class="grid-item-card-cell" style="box-sizing: border-box; background-color: rgb(255, 255, 255); overflow-x: hidden; overflow-y: hidden; border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; text-align: center; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px;" bgcolor="rgb(255, 255, 255)" align="center">
                                        <img src="https://grapesjs.com/img/tmp-devices.jpg" alt="Image2" class="grid-item-image" style="box-sizing: border-box; line-height: 150px; font-size: 50px; color: rgb(120, 197, 214); margin-bottom: 15px; width: 100%;">
                                        <table class="grid-item-card-body" style="box-sizing: border-box;">
                                          <tbody style="box-sizing: border-box;">
                                            <tr style="box-sizing: border-box;">
                                              <td class="grid-item-card-content" style="box-sizing: border-box; font-size: 13px; color: rgb(111, 119, 125); padding-top: 0px; padding-right: 10px; padding-bottom: 20px; padding-left: 10px; width: 100%; line-height: 20px;" width="100%">
                                                <h1 class="card-title" style="box-sizing: border-box; font-size: 25px; font-weight: 300; color: rgb(68, 68, 68);">Responsive
                                                </h1>
                                                <p class="card-text" style="box-sizing: border-box;">Using the device manager youll always send a fully responsive contents
                                                </p>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        <img id="iu7umc" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAiIHZpZXdCb3g9IjAgMCAyNCAyNCIgc3R5bGU9ImZpbGw6IHJnYmEoMCwwLDAsMC4xNSk7IHRyYW5zZm9ybTogc2NhbGUoMC43NSkiPgogICAgICAgIDxwYXRoIGQ9Ik04LjUgMTMuNWwyLjUgMyAzLjUtNC41IDQuNSA2SDVtMTYgMVY1YTIgMiAwIDAgMC0yLTJINWMtMS4xIDAtMiAuOS0yIDJ2MTRjMCAxLjEuOSAyIDIgMmgxNGMxLjEgMCAyLS45IDItMnoiPjwvcGF0aD4KICAgICAgPC9zdmc+" style="box-sizing: border-box; color: black;">
                        <table class="footer" style="box-sizing: border-box; margin-top: 50px; color: rgb(152, 156, 165); text-align: center; font-size: 11px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; padding-left: 5px;" align="center">
                          <tbody style="box-sizing: border-box;">
                            <tr style="box-sizing: border-box;">
                              <td class="footer-cell" style="box-sizing: border-box;">
                                <div class="c2577" style="box-sizing: border-box; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;">
                                  <p class="footer-info" style="box-sizing: border-box;">GrapesJS Newsletter Builder is a free and open source preset (plugin) used on top of the GrapesJS core library.
                                    For more information about and how to integrate it inside your applications check
                                  </p>
                                  <p style="box-sizing: border-box;">
                                    <a href="https://github.com/grapesjs/preset-newsletter" class="link" style="box-sizing: border-box; color: rgb(217, 131, 166);">GrapesJS Newsletter Preset</a>
                                    <br style="box-sizing: border-box;">
                                  </p>
                                </div>
                                <div class="c2421" style="box-sizing: border-box; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 10px;">
                                  MADE BY 
                                  <a href="https://github.com/artf" class="link" style="box-sizing: border-box; color: rgb(217, 131, 166);">ARTUR ARSENIEV</a>
                                  <p style="box-sizing: border-box;">
                                  </p>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
      </body>
      <style>
        .link {
          color: rgb(217, 131, 166);
        }
        .browser-link {
          font-size: 12px;
        }
      </style>';

        Page::create([
            'title' => 'Landing Page Berita',
            'short_description' => 'Menampilkan Halamam Utama Website Berita',
            'content' => $html,
        ]);
    }
}
