function validate() {
                var error = "";
                var numericExpression = /^[0-9]+$/;
                var alpha = /^[a-zA-Z]+$/;
                var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
                
                //name
                var name = document.getElementById( "name_of_med" );
                if( name.value.length == 0 ) {
                    error = " Name of the Medicine Cannot be Empty ";
                    document.getElementById( "e1" ).innerText = error;
                    name.focus();
                    return false;
                }
                if( name.value.match(numericExpression)){
                    error = " Enter a Valid Text ";
                    document.getElementById( "e1" ).innerHTML = error;
                    name.focus();
                    return false;
                }
    
                //brand name
                var bname = document.getElementById( "brand_of_med" );
                if( bname.value.length == 0 ) {
                    error = " Brand of the Medicine Cannot be Empty ";
                    document.getElementById( "e2" ).innerText = error;
                    document.getElementById('e1').innerHTML = "";
                    bname.focus();
                    return false;
                }
                if( bname.value.match(numericExpression)){
                    error = " Enter a Valid Text ";
                    document.getElementById( "e2" ).innerHTML = error;
                    document.getElementById('e1').innerHTML = "";
                    bname.focus();
                    return false;
                }
                
                //quantity
                var quan = document.getElementById( "quantity_of_med" );
                if( quan.value.length == 0 ) {
                    error = " Quantity Cannot be Empty ";
                    document.getElementById( "e3" ).innerHTML = error;
                    document.getElementById('e2').innerHTML = "";
                    document.getElementById('e1').innerHTML = "";
                    quan.focus();
                    return false;
                }
    
                //price
                var price = document.getElementById( "price_of_med" );
                if( price.value.length == 0 ) {
                    error = " Price Cannot be Empty ";
                    document.getElementById( "e4" ).innerHTML = error;
                    document.getElementById('e3').innerHTML = "";
                    document.getElementById('e2').innerHTML = "";
                    document.getElementById('e1').innerHTML = "";
                    price.focus();
                    return false;
                }
                
                //seller name
                var sname = document.getElementById( "sel_name" );
                if( sname.value.length == 0 ) {
                    error = " Seller's Name Cannot be Empty ";
                    document.getElementById( "e5" ).innerText = error;
                    document.getElementById('e4').innerHTML = "";
                    document.getElementById('e3').innerHTML = "";
                    document.getElementById('e2').innerHTML = "";
                    document.getElementById('e1').innerHTML = "";
                    sname.focus();
                    return false;
                }
                if( sname.value.match(numericExpression)){
                    error = " Enter a Valid Text ";
                    document.getElementById( "e5" ).innerHTML = error;
                    document.getElementById('e4').innerHTML = "";
                    document.getElementById('e3').innerHTML = "";
                    document.getElementById('e2').innerHTML = "";
                    document.getElementById('e1').innerHTML = "";
                    sname.focus();
                    return false;
                }
                
                //sel contact no
                var contact = document.getElementById( "sel_no" );
                if( contact.value.length < 10 || contact.value.length > 10) {
                    error = " Enter a Valid Contact No. for Seller ";
                    document.getElementById( "e6" ).innerHTML = error;
                    document.getElementById('e5').innerHTML = "";
                    document.getElementById('e4').innerHTML = "";
                    document.getElementById('e3').innerHTML = "";
                    document.getElementById('e2').innerHTML = "";
                    document.getElementById('e1').innerHTML = "";
                    contact.focus();
                    return false;
                }
                if( contact.value.match(alpha)){
                    error = " Enter a valid Contact No. for Seller ";
                    document.getElementById( "e6" ).innerHTML = error;
                    document.getElementById('e5').innerHTML = "";
                    document.getElementById('e4').innerHTML = "";
                    document.getElementById('e3').innerHTML = "";
                    document.getElementById('e2').innerHTML = "";
                    document.getElementById('e1').innerHTML = "";
                    contact.focus();
                    return false;
                }
            
                else    {
                    error="";
                    return true;
                }
            }