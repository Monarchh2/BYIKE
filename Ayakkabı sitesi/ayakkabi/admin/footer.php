           <footer class="footer text-center"> 2020 &copy; Yönetici Paneli - Tüm Hakları Saklıdır </footer>
        </div>
 
    </div>
 <script type="text/javascript" src="plugins/bower_components/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js"></script> 

  <script type="text/javascript" src="js/jquery.form.js"></script>


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
