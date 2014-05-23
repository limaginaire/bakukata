<div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav">
            <a class="blog-nav-item active" href="<?php echo site_url('base/dashboard'); ?>">Home</a>
            <a class="blog-nav-item" href="<?php echo site_url('base/dashboard/contact'); ?>">Contact</a>
            <a class="blog-nav-item" href="<?php echo site_url('base/dashboard/about'); ?>">About</a>
        </nav>
    </div>
</div>
<div style="padding-left:45px;" class="col-md-12">
    <h1 style="margin: 20px 0 0 0; font-weight: bold; font-size: 30px; color: #a3a3a3;">BakuKata</h1>
    <p class="text-muted">Menulis Kata-Kata Sesuai Aturan EYD</p>
</div>
<div class="col-md-12 pad-top-btm-30 clearfix">
    <form class="pad-btm-30">
        <div class="col-md-12">

            <script>
            $(document).ready(function(){ //document ready
                $("#tombol").click(function(){
                    //loading animation
                    $("#loading").show();
                    //get teks from teksarea
                    var artikel = $("#artikel").val();
                    //Ajax process rewriter
                    $.ajax({
                        type: "POST",
                        url: "<?php echo site_url('base/rewriter')?>",
                        data: "artikel="+artikel,
                        success: function(msg){
                            //jika sudah dikirim dan kembali, maka ditampilkan
                            $("#re-artikel").html(msg);
                            $("#loading").hide();
                        }
                    });

                    //Ajax count yang diubah
                    $.ajax({
                        type: "POST",
                        url: "<?php echo site_url('base/rewriter/count_kata')?>",
                        data: "artikel="+artikel,
                        success: function(msg){
                            //jika sudah dikirim dan kembali, maka ditampilkan
                            $("#count").html(msg);
                            $("#loading").hide();
                        }
                    });
                });

                $("#reset").click(function(){
                    $("#re-artikel").html("");
                    $("#loading").hide();
                });
            });
        </script>

        <!--textarea input-->
        <script type="text/javascript" >
            function textCounter(field,counter,maxlimit,linecounter) {
                // text width//
                var fieldWidth =  parseInt(field.offsetWidth);
                var charcnt = field.value.length;

                // limit
                if (charcnt > maxlimit) {
                    field.value = field.value.substring(0, maxlimit);
                }

                else {
                    // progres limit
                    var percentage = parseInt(100 - (( maxlimit - charcnt) * 100)/maxlimit) ;
                    document.getElementById(counter).style.width =  parseInt((fieldWidth*percentage)/100)+"px";
                    document.getElementById(counter).innerHTML=""+percentage+"%";

                    // warna on style from CCFFF -> CC0000
                    setcolor(document.getElementById(counter),percentage,"background-color");
                }
            }

            function setcolor(obj,percentage,prop){
                obj.style[prop] = "rgb(80%,"+(100-percentage)+"%,"+(100-percentage)+"%)";
            }
        </script>
        <div class="col-md-6 pad-btm-30">
            <p class="text-info bold">Kata Tidak Baku</p>
            <span class="center-block">
                <!--progressbar-->
                <!-- <div class="progress"></div> -->
                <p id="progressbar1" class="text-muted mg-top-10">Maksimal 1000 karakter</p>
            </span>
            <script type="text/javascript">textCounter(document.getElementById("artikel"),"progressbar1",1000)</script>

            <textarea name="komentar" id="artikel" max="1000" class="form-control" style="height: 230px;" 
            OnKeyDown="textCounter(this, 'progressbar1', 1000 )" 
            OnKeyUp="textCounter(this, 'progressbar1', 1000 )"
            OnKeyFocus="textCounter(this, 'progressbar1', 1000 )"
            ></textarea>
            <button id="tombol" type="button" class="btn btn-primary btn-sm bold mg-top-10 mg-right-10">Proses</button>
            <button type="reset" id="reset" class="btn btn-danger btn-sm bold mg-top-10 mg-right-10">Hapus</button>
            <span style="display:none" id="loading"><img src="<?php echo base_url('resource/img/loading.gif')?>" /></span>
            <br/>
        </div>
        <div class="col-md-6 pad-btm-30">
            <p class="text-info bold">Kata Baku</p>
            <p style="height:20px" ><span id="count" class="bold"></span></p>
            <!-- <div class="progress"></div> -->
            <div id="re-artikel" style="height: 230px; background-color: #f5f5f5; overflow: auto;" class="form-control" style="cursor: text;" data-toggle="tooltip" data-placement="top" title="Kata Baku"></div>
            <!-- <textarea id="re-article" class="form-control" rows="10" readonly style="cursor: text;" data-toggle="tooltip" data-placement="top" title=