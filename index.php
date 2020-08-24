<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JQuery Dersleri</title>
    <script src="jquery.min.js"></script>
    <script>
    //------------------------------Selector Seçimi-----------------------------------------------------------------------

    // Jquery belge tam yuklendiyse calıs,tam yuklenmediyse calısma demem lazım
    //     $(document).ready(function(){
    //         //Jquery kodları buraya gelecek

    //         $("button").click(function(){
    //             $("p").hide();   //Butona basıldıktan sonra bütün p taglarini saklamıs olacak

    //         })

    //         // $("#btnTikla").click(function(){//Id ile selector islemi  
    //         //     $("#ilkp").hide();   //Butona basıldıktan sonra idsi ilkp olan p tagini saklamıs olacak

    //         // })

    //         // $("#btnTikla").click(function(){//Id ile selector islemi  
    //         //     $(".ikincip").hide();   //Butona basıldıktan sonra classi ikincip olan p tagini saklamıs olacak

    //         // })

    //         // $("#btnTikla").click(function(){//Id ile selector islemi  
    //         //     $("*").hide();   //Butona basıldıktan sonra bütün elemanları saklamıs olacak

    //         // })

    //         // $("#btnTikla").click(function(){//Id ile selector islemi  
    //         //     $(this).hide();   //Butona basıldıktan sonra mevcut html elementini(button) saklamıs olacak

    //         // })

    //         // $("#btnTikla").click(function(){//Id ile selector islemi  
    //         //     $("p.ikincip").hide();   //Butona basıldıktan sonra classi ikincip olan p taglerini saklamıs olacak

    //         // })

    //         // $("#btnTikla").click(function(){//Id ile selector islemi  
    //         //     $("p:first").hide();   //Butona basıldıktan sonra p taglerini ilkini saklamıs olacak

    //         // })

    //         // $("#btnTikla").click(function(){//Id ile selector islemi  
    //         //     $("ul li:first").hide();   //Butona basıldıktan sonra ilk ul htmlinin icindeki ilk li tagini saklamıs olacak

    //         // })

    //         // $("#btnTikla").click(function(){//Id ile selector islemi  
    //         //     $("ul li:first-child").hide();   //Butona basıldıktan sonra ul htmlerinin icindeki ilk li taglerini saklamıs olacak

    //         // })

    //         // $("#btnTikla").click(function(){//Id ile selector islemi  
    //         //     $("[href]").hide();   //Butona basıldıktan sonra href ozlligine sahip htmlini saklamıs olacak

    //         // })

    //         // $("#btnTikla").click(function(){//Id ile selector islemi  
    //         //     $("a[target='_blank']").hide();   //Butona basıldıktan sonra anın icerisinde targetı _blank olanları  saklamıs olacak

    //         // })

    //         // $("#btnTikla").click(function(){//Id ile selector islemi  
    //         //     $(":button").hide();   //Butona basıldıktan sonra button etiketlerini de button htmlerini(type) de saklamıs olacak

    //         // })

    //         // $("#btnTikla").click(function(){//Id ile selector islemi  
    //         //     $("tr:even").hide();   //Butona basıldıktan sonra cift sayıya denk gelen tr taglerini saklamıs olacak

    //         // })

    //         // $("#btnTikla").click(function(){//Id ile selector islemi  
    //         //     $("tr:even").css("background-color","green");   //Butona basıldıktan sonra cift sayıya denk gelen tr taglerini css ile yesil backgroundda gösterir.

    //         // })
         
    //     });

        //------------------------------------------------Selector Seçimi Son ----------------------------------------------


        //-----------------------------------EVENTLER--------------------------------------------------------------

            //Jqueryde html sayfasındaki degisiklere göre özel hazırlanmıs eventler bulunmaktadır.Bir Web sayfasının ziyaretciler tarfındanuygulanan ve yanıtlayabilecegi olaylara
            //event denir.Mouse eventleri,klavye eventleri,form eventleri,document eventleri gibi gruplara ayrılabilir. 

        // $(function(){ //$(document).ready() işleminin aynısını yapabilir.
            
        //     // $("button").click(function(){//Butona tıklandıgı zaman calısacak
        //     //     $("p").slideToggle(); //ASagı yukarı animasyon seklinde acılıp kapanmasını saglar

        //     // })

        //     // $("p").on("click",function(){
        //     //     //Bir veya birden fazla eventi aynı anda kullanabilmek icin gerekli
        //     //     $(this).hide();//Pyi sakla
        //     // }) 

        //                         //Çoklu event atama
        //     // $("p").on({
        //     //     mouseenter:function(){//Mouse ile üzerine gelindiginde
        //     //         $(this).css("background-color","green");
        //     //     },
        //     //     mouseleave:function(){//Mouse ustunden cekildiginde
        //     //         $(this).css("background-color","yellow");
        //     //     },
        //     //     click:function(){//Mouse ile üzerine tıklatıldıgında
        //     //         $(this).css("background-color","red");
        //     //     }

        //     // })

        //                     //Mouse Eventleri

        //     // $("p").click(function(){ //Click Eventi
        //     //     alert("Alert");
        //     // })

        //     // $("p").dblclick(function(){ //DoubleClick Eventi =>iki kere sol mouse
        //     //     alert("Alert");
        //     // })

        //     //Bir ogeye mousela tıklanılıp bırakılmadıgında mouse down,bırakıldıgında mouse up eventi calısır
        //     // $("div").mouseup(function(){ //Click Eventi
        //     //     $(this).after("<p style ='color:green';>Mouse Up</p>");
        //     // });
        //     // $("div").mousedown(function(){ //Click Eventi
        //     //     $(this).after("<p style ='color:red';>Mouse Down</p>");
        //     // });

        //     //Fare ogesi secili ogenin uzerine geldiginde ya da ogenin uzerinden ayrıldıgında kullanılan eventtir
        //     // $("p").mouseenter(function(){ //Mouseenter Eventi =>Seçili htmlin üstüne gelince css koduyla renk değistirir
        //     //     $("p").css("background-color","yellow");
        //     // });
        //     // $("p").mouseleave(function(){ //Mouseleave Eventi =>Seçili htmlin üstünden ayrılınca css koduyla renk değistirir
        //     //     $("p").css("background-color","red");
        //     // });

        //     //Hover =>Secilen elemanların ustune gelince calısacak iki islemi tek bir seferde yazmak icin kullanılır
        //     // $("p").hover(function(){ //Mouse enter gibi calısıyor ?
        //     //     $(this).css("background-color","yellow");
        //     // },
        //     // function(){ //Mouse leave gibi calısıyor ?
        //     //     $(this).css("background-color","green");
        //     // })

        //     //Mouse move=>Fare imleci secilen htmlin(elemanın) icinde 1 px hareket ettiginde ortaya cıkar.
        //     // $(document).mousemove(function(event){ 
        //     //     //event ile koordinatları almak istiyoruz
        //     //     $("span").text(event.pageX+","+event.pageY); 
        //     // })

        //             //--Klavye Eventleri--
            
        //             //Key Pressed
        //     // var i=0;
        //     // $("input").keypress(function(){
        //     //     $("span").text(i+=1);
        //     // })

        //     //Key down
        //     // var i=0;
        //     // $("input").keydown(function(){
        //     //     //Yön tuslarını da algılayabilir
        //     //     $("span").text(i+=1);
        //     // })

        //     //Keyup
        //     // $("input").keydown(function(){
        //     //     //Yön tuslarını da algılayabilir
        //     //     $("input").css("background-color","yellow");
        //     // });
        //     // $("input").keyup(function(){
        //     //     //Yön tuslarını da algılayabilir
        //     //     $("input").css("background-color","green");
        //     // });

        //     //Hangi tusa basıldıgını yakalamak icin kullanılır.
        //     // $("input").keydown(function(event){
        //     //     //Yön tuslarını da algılayabilir
        //     //     $("p").html("Key:"+event.which);
        //     // })

        //                 //--Form Eventleri--
            
        //     //submit Eventi
        //     // $("form").submit(function(){

        //     //     alert("Submit olayı gerceklesti");
        //     // });

        //     //change Eventi => sadece input,textArea ve select elementleri için calısır
        //     // $("input").change(function(){
        //     //     alert("İnput değistirildi");
        //     // });

        //     //Focus and Blur=> bir oge netlendiginde olusur,blur netlik kaldırıgında calısır.
        //     // $("input").focus(function(){
        //     //     //input ogesinin üzerine tıklandıgında #dddddd olur
        //     //     $(this).css("background-color","#dddddd");
        //     // })
        //     // $("input").blur(function(){
        //     //     //Tıklama kaldırındıgında #ffffff olur.
        //     //     $(this).css("background-color","#ffffff");
        //     // })
        // });

        //--------------------------------Eventler Son----------------------------------------------------------------

        //---------------------------------EFEKTLER-------------------------------------------------------------------
        
        // $(document).ready(function(){

        //                     //Hide ve Show

        //     // $("#hide").click(function(){
        //     //     //#hide idli bir butona tıklanıldıgında p ogelerini saklayacak
        //     //     $("p").hide(1000);
        //     // });
        //     // $("#show").click(function(){
        //     //     //#hide idli bir butona tıklanıldıgında p ogelerini saklayacak
        //     //     $("p").show(5000);
        //     // });
            
        //     // $(button).click(function(){
        //     //     //İki farklı butona gerek yok elementacıksa kapatır,kapalıysa acılır
        //     //     $("p").toggle();
        //     // });

        //                    //Fade Efekti
        //     //Html ogelerini soluklastırabilir ya da tamamen gorunmez yapabiliriz
        //     //fadeIn,fadeOut,fadeToggle,Fadeto metodları bulunmakta
            
        //     // $("button").click(function(){
        //     //     $("#div1").fadeIn();
        //     //     $("#div2").fadeIn("Slow");
        //     //     $("#div3").fadeIn(5000);
        //     // })

        //     // $("button").click(function(){
        //     //     $("#div1").fadeOut();
        //     //     $("#div2").fadeOut("Slow");
        //     //     $("#div3").fadeOut(5000);
        //     // })

        //     // $("button").click(function(){
        //     //     $("#div1").fadeToggle();
        //     //     $("#div2").fadeToggle("Slow");
        //     //     $("#div3").fadeToggle(5000);
        //     // })

        //     // $("button").click(function(){
        //     //     //Belirli bir opaklık derecesine kadar gorulup gorulmedigini ayarlar.
        //     //     $("#div1").fadeTo("slow",0.5);
        //     //     $("#div2").fadeTo("slow",0.9);
        //     //     $("#div3").fadeTo("slow",0.1);
        //     // })

        //                     //Slide Efekti
        //     //Html ogelerini kaydırmaya yarar
        //     //slideUp,slideDown,slideToggle 

        //     // $("#buton").click(function(){
        //     //     $("#panel").slideDown("slow");
        //     // })

        //     // $("#buton").click(function(){
        //     //     $("#panel").slideUp("slow");
        //     // })

        //     // $("#buton").click(function(){
        //     //     $("#panel").slideToggle("slow"); //milisaniye de alabilir.
        //     // })

        //                     //Animate Efekti
        //     // $(selector).animate({params},hız,geri donus funct)
        //     // params=>gerekli css kodlarını yazmaya yarayan bolum
        //     // hız=>slow,fast gibi parametreler alabilir
        //     // geridonus fonksiyonu =>animasyon tamamlandıktan sonra kodun ne yapacagını icerir
        //     //Bir html ogesine birden fazla animate ozelligini verirsek bunlar kendi ic sırasıyla calısır 
        //     // $("button").click(function(){
        //     //     // $("div").animate({left:'250px'}); //Bir css ozelligini ayarladık
                
        //     //     // $("div").animate({
        //     //     //     // left:'250px',
        //     //     //     // // opacity:'0.5',
        //     //     //     // height:'+=100px',
        //     //     //     // width:'+=100px'
        //     //     //     // height:'toggle' //Tıklanınca acılır,tekrar tıklanınca kapanır
        //     //     //     // height:'hide'
        //     //     //     // height:'show'

        //     //     // });

        //     //     // var div=$("div");
        //     //     // div.animate({height:'300px',opacity:'0.4'},"slow");
        //     //     // div.animate({width:'300px',opacity:'0.8'},"slow");
        //     //     // div.animate({height:'100px',opacity:'0.4'},"slow");
        //     //     // div.animate({width:'100px',opacity:'0.8'},"slow");

        //     //     // div.animate({left:'250px'},"slow");
        //     //     // div.animate({fontSize:'3em'},"slow");

        //     // })

        //                     //Stop Efekti
        //     //Animasyonları ya da efektleri bitirmeden durdurmaya yarar.
        //     // $(selector).stop(hepsinidurdur,sonagit)
        //     // hepsinidurdur=>animasyonun kuyrugunun durdurulup durdurulmayacagını belirtir,varsayılan olarak post gelir
        //     // sonagit=>gecerli parametrenin emen tamamlanıp tamalanmayagını belirtir,true olursa tum animasyonların son hali gelir

        //     // $("#buton").click(function(){
        //     //     $("#panel").slideDown(5000);
        //     // })
        //     // $("#durdur").click(function(){
        //     //     $("#panel").stop();
        //     // })

        //     // $("#baslat").click(function(){
        //     //     $("div").animate({left:'500px'},5000);
        //     //     $("div").animate({fontSize:'500px'},5000);
        //     // })
        //     // $("#durdur").click(function(){
        //     //     $("div").stop();
        //     // })
        //     // $("#durdur2").click(function(){
        //     //     $("div").stop(true);
        //     // })
        //     // $("#durdur3").click(function(){
        //     //     $("div").stop(true,true);
        //     // })


        // })
        //-------------------------------Efektler Son-----------------------------------------------------------------

        //-----------------HTML JQUERY---------------------------------------------------------------------------------
        //text(),html(),val() metodlarına sahiptir.

        // //HTML Add kısmındaki gerekli fonksiyondur,son kısımda uncomment olması gerekir.
        // function appendText(){
                    
        //             var txt1="<p> Text1 </p>";
        //             var txt2=$("<p></p>").text("Text2");
        //             var txt3=document.createElement("p");
        //             txt3.innerHTML="Text3";

        //             $("body").append(txt1,txt2,txt3);


        //         }

                        //HTML Get İslemleri
        $(document).ready(function(){
            //btn1e tıklanırsa text metodunu calıstıracak,btn-2ye tıklanırsa html metodunu calıstıracak
            // $("#btn1").click(function(){
            //     alert("Text:"+$("#test").text());
            // })
            // $("#btn2").click(function(){
            //     alert("Text:"+$("#test").html());
            // })

            // $("#btn2").click(function(){
            //     //Inputun degerini bize alert olarak verecek
            //     alert("Deger : "+$("#test2").val());
            // })

                            //HTML Set İslemleri
            
            // $("#btn1").click(function(){
            //     //text() metodunun set etmek için kullanılır.
            //     //Pnin ustune "set edilen deger" yazar.
            //     $("#test1").text("set edilen deger");
            // });
            // $("#btn2").click(function(){
            //     //text() metodunun set etmek için kullanılır.
            //     //pnin ustune Kalın sekilde "set edilen deger" yazar
            //     $("#test2").html("<b>set edilen deger</b>");
            // });
            // $("#btn3").click(function(){
            //     //text() metodunun set etmek için kullanılır.
            //     //inputun içine val metodunun içindeki stringi yazar.
            //     $("#test3").val("Anıl Uğur Yeldan");
            // });
            // $("button").click(function(){
            //     //secilmis html ogesinin attributeunu degistirmeye yarar.
            //     $("#link").attr("href","www.google.com"); //Süslü parantezle icinde birden fazla attr degistirilebilir.
            // });

                            //HTML Add İslemleri
                //append()=>secilen ogelerin sonuna ekleme yaapr
                //prepend()=>secilen ogelerin basina ekleme yapar
                
                // $("#btnText").click(function(){
                //     //btnTExt ogesine basıldıgında 
                //     $("p").append("Eklenen Yazı");
                // });
                // $("#btnListe").click(function(){
                //     $("ol").append("<li>Eklenen Liste</li>");
                // });

                // $("#btnText").click(function(){
                //     //btnTExt ogesine basıldıgında 
                //     $("p").prepend("Eklenen Yazı");
                // });
                // $("#btnListe").click(function(){
                //     $("ol").prepend("<li>Eklenen Liste</li>");
                // });

                // $("#btnText").click(function(){
                //     //btnTExt ogesine basıldıgında 
                //     $("p").after("Eklenen Yazı");
                // });
                // $("#btnListe").click(function(){
                //     $("ol").before("<li>Eklenen Liste</li>");
                // });

                //Son Kısım

                            //HTML Remove
                //remove()=>secilen elemanı ve icindeki child elemanları,
                //empty()=> sadece secilen elemntin alt ogelerini kaldırır.

                // $("button").click(function(){
                //     $("#div1").remove();
                // })

                // $("button").click(function(){
                //     $("p").remove(".test");
                // })

                            //CSS Classes
                //CSS classes ozelliklerini jquery ile birlikte kullanarak html elementlerinin css ozelliklerini
                //degistirebiliriz.Bunun icin addClass() metodu kullanılır.Silmek icin removeClass() metodunu kullanacagız.
                //Silindiyse yuklensin,yuklendiyse silinmesi icin toggleClass() metodunu kullanabiliriz.
                
                // $("button").click(function(){
                //     // $("h1,p").addClass("mavi");
                //     // $("p").addClass("onemli");
                //     // $("p").removeClass("onemli");
                //     $("#t").toggleClass("onemli mavi");

                // })
                
                            //css() Metodu
                $("button").click(function(){
                    //ilk pnin arkaplan rengini verir
                    // alert("Arka plan rengi:"+$("p").css("background-color"));
                    
                    //Tüm plerin arkaplan rengini sarı yapar.
                    // $("p").css("background-color","yellow");

                    // $("p").css({"background-color":"yellow","font-size":"200%"});


                })

                



        })

        
        //------------------HTML JQUERY Son---------------------------------------------------------------------

    </script>

    <!-- Slide Efekti icin tasarım -->
    <!-- <style>
    #panel,#buton{
        padding:5px;
        text-align: center;
        background-color:#e5eecc;
        border:solid 1px #c3c3c3;
    }
    #panel{
        padding:50px;
        display:none;
    }
    </style> -->

    <!-- Stop Efekti icin tasarım -->
    <!-- <style>
    #panel,#buton{
        padding:5px;
        font-size:18px;
        text-align: center;
        background-color:#555;
        color:'white';
        border:solid 1px #666;
        border radius:3px;
    }
    #panel{
        padding:50px;
        display:none;
    }
    </style> -->

    <!-- Css Classes icin tasarım -->
    <!-- <style>
    /* (.onemli sınıfı) */
    .onemli{
        font-weight:bold;
        font-size:xx-large;
    }
    /* (.mavi sınıfı) */
    .mavi{
        color:blue;
    }
    </style> -->

</head>
<body>
        <!-- <h2>Başlık İçin</h2> -->
        <!-- <p id="ilkp">İlk Paragraf</p>
        <p class="ikincip">İkinci Paragraf</p> -->
        <!-- <ul>
            <li>Kahve</li>
            <li>Çay</li>
        </ul>
        <ul>
            <li>Kola</li>
            <li>Meyve Suyu</li>
            <li>Gazoz</li>
        </ul> -->

        <!-- <a href="#" target="_blank">Link</a>
        <a href="#">Link 2</a> -->
        
        <!-- <table>
            <tr>
                <th>Şirket</th>
                <th>Ülke</th>
            </tr>
            <tr>
                <th>AOS Yazılım</th>
                <th>Türkiye</th>
            </tr>
            <tr>
                <th>AOS Eğitim</th>
                <th>Türkiye</th>
            </tr>
        
        </table> -->

        <!-- <button id="btnTikla">Tıkla ve Sil</button> -->
        <!-- <input type="button" id="btnTikla" value="Tıkla ve Sil"></input> -->

                        <!-- MouseEventleri -->
        <!-- <p>Toggle kullanarak paragraf</p> -->
        <!-- <p>İkinci p</p> -->
        <!-- <button>Aşağı ve Yukarı</button> -->
        <!-- <div>Tıkla</div> -->
        <!-- <span>Koordinatlar</span> -->
        
                        <!-- KeyEventleri -->
        <!-- Adınızı Giriniz : <input type="text"> -->
        <!-- <p>Key Pressed: <span>0</span></p> -->
        <!-- <p></p> -->

                        <!-- FormEventleri -->
        <!-- <form action="">
            
            Ad: <input type="text" name="ad" value="Anıl Uğur">
            <br>
            Soyad: <input type="text" name="soyad" value="Yeldan">
            <br>
            <input type="submit" value="Kaydet">

        </form> -->

                        <!-- Efektler -->
        <!-- <p>Butonlara basıldıgında</p>
        <button id="hide">Sakla</button>
        <button id="show"> Göster</button> -->
        
        <!-- <div id="div1" style="width:80px;height:100px;display:none;background-color:red;"></div><br>
        <div id="div2" style="width:80px;height:100px;display:none;background-color:green;"></div><br>
        <div id="div3" style="width:80px;height:100px;display:none;background-color:blue;"></div><br> -->

        <!-- <div id="div1" style="width:80px;height:100px;background-color:red;"></div><br>
        <div id="div2" style="width:80px;height:100px;background-color:green;"></div><br>
        <div id="div3" style="width:80px;height:100px;background-color:blue;"></div><br>
        <button>Tıkla</button> -->

        <!-- <div id="buton">Tıkla</div>
        <div id="panel">Merhabalar</div> -->

        <!-- <button>Tıkla</button>
        <div style="background-color:#98bf21;height:150px;width:150px;position:absolute;">Merhaba</div> -->

        <!-- <button id="durdur">Slide Durdur</button>
        <div id='buton'>Tıkla</div>
        <div id="panel">Merhabalar</div> -->

        <!-- <button id="baslat">Baslat</button>
        <button id="durdur">Durdur</button>
        <button id="durdur2">Hepsini Durdur</button>
        <button id="durdur3">Durdur ve Bitir</button>
        <div style="background-color:#98bf21;height:100px;width:100px;position:absolute;">Merhaba</div> -->

                    <!-- JQuery HTML -->  
        <!-- <p id="test">Yazı Yazalım <b>Kalın</b> olsun</p>
        <button id="btn1">Text</button>
        <button id="btn2">Html</button>     -->

        <!-- <p id="test">İsminiz <input type="text" id="test2"></p>
        <button id="btn2">Değeri Göster</button> -->

        <!-- <p id="test1">Paragraf 1</p>
        <p id="test2">Paragraf 2</p>
        <p>Girilen Değer <input type="text" id="test3" value="Değer gir"></p>
        <button id="btn1">Set Text</button>
        <button id="btn2">Set HTML</button>
        <button id="btn3">Set Val</button>
        <br>
        <a href="www.aos.com.tr" id="link">Linke Tıkla</a>
        <button>Tıkla</button> -->

        <!-- <p>İlk Paragraf</p>
        <p>İkinci Paragraf</p>
        <ol>
            <li>
                Kahve
            </li>
            <li>
                Çay
            </li>
        </ol>
        <button id="btnText">Yazı Ekle</button>
        <button id="btnListe">Liste Ekle</button> -->
        <!-- <button onclick="appendText()">Metinler Ekle</button> -->

        <!-- <div id="div1" style="height:100px;width:300px;border:1px solid black;">
            Bir yazı
            <p class="test"> Classı "test" olan paragraf</p>
            <p >paragraf 2</p>
            <h1>başlık</h1>
        </div>
        <br>
        <button>Sil</button> -->

        <!-- <h1>Başlık</h1>
        <p>Paragraf</p>
        <p class="onemli">Paragraf</p>
        <p id="t">Toggle</p>
        <button>Ekle</button> -->

        <p style="background-color: #ff0000">Kırmızı Yazı</p>
        <p style="background-color: blue">Mavi Yazı</p>
        <button>Degistir</button>






        
    
</body>
</html>

<!-- $(selector).action() 
Selector html işaretlerini secer,degistirmemize olanak saglar
action html elementine uygulanan jquery eylemini verir
$(this).hide();
$("p").hide();
$(".test").show(); Classı test olan html elementini göster
$("#test").show()  ID yollamak icin kullanılır
 -->