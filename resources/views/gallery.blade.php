@extends('layouts.app')
@section('content')
    <script>
        $(function () {
            $("#btn_container").height($("#img_container").height());
            var online_image = 1;
            var number = 11;
            goto(1);
            var hidden_element ;
            function check_item(n) {
                hidden_element = $(".icon[data-number="+n+"]");
                $(".icon[data-number="+n+"]").replaceWith('<img src="logo/check.png" id="check" style="height: 32px;margin-right: 5px;"/>');
            }
            function reshape_item(n) {
                $("#check").replaceWith(hidden_element);
            }
            function next() {
                if(online_image != 11)
                        goto(online_image + 1);
                else
                        goto(1);
            }
            function before() {
                if(online_image != 1)
                        goto(online_image - 1 );
                else
                        goto(11);
            }
            function goto(n) {
                reshape_item(online_image);
                check_item(n);
                $("#image").attr("src" , "slideshow/"+n+".webp");
                online_image=n;
            }
            $("#up").click(function () {
               next(); 
            });
            $("#down").click(function () {
               before(); 
            });
            $(".icon").click(function () {
                var index = parseInt(this.attr("data-number"));
                goto(index);
            })
        });
    </script>
    <div class="container-fluid">
        <div class="col-sm-12 col-md-12 col-lg-8 col-lg-offset-2">
            <table>
                <tr>
                    <td id="img_container">
                        <img src="slideshow/1.webp" id="image"
                             style="border-radius: 3px;-webkit-box-shadow: 0px 0px 14px 2px rgba(138,138,138,0.75);-moz-box-shadow: 0px 0px 14px 2px rgba(138,138,138,0.75);box-shadow: 0px 0px 14px 2px rgba(138,138,138,0.75);"/>

                    </td>
                    <td id="btn_container" style="display: flex; flex-direction: column; justify-content: center; align-items: center;padding-left: 5px;">
                        <img id="up" src="logo/arrow_up.png" style="width: 32px;"/>
                        <img id="down" src="logo/arrow_down.png" style="width: 32px;"/>
                    </td>
                </tr>
                <tr>
                    <td style="display: flex; flex-direction: row; justify-content: center; align-items: center;padding-top: 10px;">
                        @for($i = 1 ; $i <=11 ; $i++)
                            <img
                                    src="slideshow/{{$i}}.webp"
                                    style="height: 32px;margin-right: 5px; border-radius: 1px;"
                                    data-number="{{$i}}"
                                    class="icon"/>
                        @endfor
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endsection