 <?php
 include'header.php';
 include'sidebar.php';
  ?>
 
 

 
        <div id="page-wrapper">
            <div>
 
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">YENİ ÜRÜN EKLE</h3>
                         <?php if ($_GET['durum']=="ok") { ?>
                                <p style="color: #8D96DB;" class="text-muted m-b-30">Güncelleme Yapıldı</p>
                            <?php } elseif ($_GET['durum']=="no") { ?>
                                <p style="color: red;" class="text-muted m-b-30">İşlem Başarısız !!!</p>
                            <?php } elseif ($_GET['durum']=="ky") { ?>
                                <p style="color: red; font-weight: bold;" class="text-muted m-b-30">En Az 1 Kategori Seçilmelidir !!!</p>
                            <?php } else { ?>
                                <p class="text-muted m-b-30">Yeni ÜRÜN Ekleyin</p>
                            <?php } ?> <hr><br>

 

<form action="netting/islem-admin.php" method="POST"    enctype="multipart/form-data">
 
 <div class="form-group">
 

<label class="control-label ">ÜRÜN Foto</label>
<div class="fileinput fileinput-new input-group" data-provides="fileinput">
<div class="form-control" data-trigger="fileinput"> 
<i class="glyphicon glyphicon-file fileinput-exists"></i>
<span class="fileinput-filename"></span>
</div>
<span class="input-group-addon btn btn-default btn-file">
<span class="fileinput-new">Resim Değiştir</span>
<span class="fileinput-exists">Değiştir</span>
<input type="file" name="urun_resimyol" required="required" > </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Sil</a> 
<div class="help-block with-errors"></div></div>
</div>
 
<div class="form-group">
<div class="switchery-demo m-b-30">
<label for="ad" class="control-label">YAYIN DURUMU &nbsp;&nbsp;&nbsp;&nbsp; Pasif &nbsp; </label>       
<input type="checkbox" checked    name="durum" class="js-switch" data-color="#6164c1" data-size="small"  />
<label for="ad" class="control-label"> &nbsp; Aktif </label></div>

 
</div>



<div class="form-group">
<label for="ad" class="control-label">Başlık</label>
<input type="text" class="form-control"  name="baslik" placeholder="Başlık" required="required"> 
<div class="help-block with-errors"></div>
</div>

 

<div class="form-group">
<label for="ad" class="control-label">Fiyat</label>
<input type="number" class="form-control"  name="fiyat" placeholder="Fiyat" required="required" > 
<div class="help-block with-errors"></div>
</div>

 
 

 <div class="form-group">
<label for="textarea" class="control-label">Cinsiyet</label>
                            <select class="form-control" name="cinsiyet">
                             
                            <option value="1">Erkek</option>
                            <option value="2">Kadın</option> 
                                                       
                                                    </select> </div> 

 
 
 
<div class="form-group">



<label for="textarea" class="control-label">Açıklama</label>
<textarea  class="form-control"  name="detay"></textarea> <span class="help-block with-errors"> Açıklama Girin</span> </div>
 

 
 
                                <div class="form-group">
                                    <button  type="submit" name="urunekle" class="btn btn-primary">Kaydet </button>
                                </div>

 



                            </form>
                        </div>







                    </div>
               
                </div>
   
            </div> 
           <footer class="footer text-center"> 2020 &copy; Yönetici Paneli - Tüm Hakları Saklıdır </footer>
        </div>
 
    </div>
 <script type="text/javascript" src="plugins/bower_components/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
    <script type="text/javascript">
    $(function() {
        //editables 
        $('#username').editable({
            type: 'text',
            pk: 1,
            name: 'username',
            title: 'Enter username'
        });
        $('#firstname').editable({
            validate: function(value) {
                if ($.trim(value) == '') return 'This field is required';
            }
        });
        $('#sex').editable({
            prepend: "not selected",
            source: [{
                value: 1,
                text: 'Male'
            }, {
                value: 2,
                text: 'Female'
            }],
            display: function(value, sourceData) {
                var colors = {
                        "": "#98a6ad",
                        1: "#5fbeaa",
                        2: "#5d9cec"
                    },
                    elem = $.grep(sourceData, function(o) {
                        return o.value == value;
                    });
                if (elem.length) {
                    $(this).text(elem[0].text).css("color", colors[value]);
                } else {
                    $(this).empty();
                }
            }
        });
        $('#status').editable();
        $('#group').editable({
            showbuttons: false
        });
        $('#dob').editable();
        $('#comments').editable({
            showbuttons: 'bottom'
        });
        //inline
        $('#inline-username').editable({
            type: 'text',
            pk: 1,
            name: 'username',
            title: 'Enter username',
            mode: 'inline'
        });
        $('#inline-firstname').editable({
            validate: function(value) {
                if ($.trim(value) == '') return 'This field is required';
            },
            mode: 'inline'
        });
        $('#inline-sex').editable({
            prepend: "not selected",
            mode: 'inline',
            source: [{
                value: 1,
                text: 'Male'
            }, {
                value: 2,
                text: 'Female'
            }],
            display: function(value, sourceData) {
                var colors = {
                        "": "#98a6ad",
                        1: "#5fbeaa",
                        2: "#5d9cec"
                    },
                    elem = $.grep(sourceData, function(o) {
                        return o.value == value;
                    });
                if (elem.length) {
                    $(this).text(elem[0].text).css("color", colors[value]);
                } else {
                    $(this).empty();
                }
            }
        });
        $('#inline-status').editable({
            mode: 'inline'
        });
        $('#inline-group').editable({
            showbuttons: false,
            mode: 'inline'
        });
        $('#inline-dob').editable({
            mode: 'inline'
        });
        $('#inline-comments').editable({
            showbuttons: 'bottom',
            mode: 'inline'
        });
    });
    </script>
        <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
 <script type="text/javascript" src="js/jquery.form.js"></script>
        <script src="bootstrap/dist/js/bootstrap.min.js"></script>
 
        <script src="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
 
        <script src="js/jquery.slimscroll.js"></script>
 
        <script src="js/waves.js"></script>
 
        <script src="js/custom.min.js"></script>
         <script src="js/footable-init.js"></script> 
          <script src="plugins/bower_components/footable/js/footable.all.min.js"></script> <!--ürün -->
    <script src="plugins/bower_components/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script> <!--ürün -->
        <script src="plugins/bower_components/switchery/dist/switchery.min.js"></script>
        <script src="plugins/bower_components/custom-select/custom-select.min.js" type="text/javascript"></script>
        <script src="plugins/bower_components/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
        <script src="plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
        <script src="plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="plugins/bower_components/multiselect/js/jquery.multi-select.js"></script>
        <script>
        jQuery(document).ready(function() {
            
            var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
            $('.js-switch').each(function() {
                new Switchery($(this)[0], $(this).data());
            });
         
            $(".select2").select2();
            $('.selectpicker').selectpicker();
            //Bootstrap-TouchSpin
            $(".vertical-spin").TouchSpin({
                verticalbuttons: true,
                verticalupclass: 'ti-plus',
                verticaldownclass: 'ti-minus'
            });
            var vspinTrue = $(".vertical-spin").TouchSpin({
                verticalbuttons: true
            });
            if (vspinTrue) {
                $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
            }
            $("input[name='tch1']").TouchSpin({
                min: 0,
                max: 100,
                step: 0.1,
                decimals: 2,
                boostat: 5,
                maxboostedstep: 10,
                postfix: '%'
            });
            $("input[name='tch2']").TouchSpin({
                min: -1000000000,
                max: 1000000000,
                stepinterval: 50,
                maxboostedstep: 10000000,
                prefix: '$'
            });
            $("input[name='tch3']").TouchSpin();
            $("input[name='tch3_22']").TouchSpin({
                initval: 40
            });
            $("input[name='tch5']").TouchSpin({
                prefix: "pre",
                postfix: "post"
            });
            // For multiselect
            $('#pre-selected-options').multiSelect();
            $('#optgroup').multiSelect({
                selectableOptgroup: true
            });
            $('#public-methods').multiSelect();
            $('#select-all').click(function() {
                $('#public-methods').multiSelect('select_all');
                return false;
            });
            $('#deselect-all').click(function() {
                $('#public-methods').multiSelect('deselect_all');
                return false;
            });
            $('#refresh').on('click', function() {
                $('#public-methods').multiSelect('refresh');
                return false;
            });
            $('#add-option').on('click', function() {
                $('#public-methods').multiSelect('addOption', {
                    value: 42,
                    text: 'test 42',
                    index: 0
                });
                return false;
            });
        });
        </script>
 
        <script src="plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
