// function progress() {
//     var prg = document.getElementById('progress');
//     var percent = document.getElementById('percentCount');
//     var counter = 0;
//     var progress = 0;
//     var id = setInterval(frame, 75);
//
//     function frame(){
//         if (progress == 100){
//             clearInterval(id);
//             window.location = "/login";
//         } else {
//             progress += 1;
//             counter += 1;
//             prg.style.width = progress + '%';
//             percent.innerHTML = counter + '%';
//         }
//     }
// }
// progress();

document.onreadystatechange = function(e)
{
    if(document.readyState=="interactive")
    {
        var all = document.getElementsByTagName("*");
        for (var i=0, max=all.length; i < max; i++)
        {
            set_ele(all[i]);
        }
    }
}

function check_element(ele)
{
    var all = document.getElementsByTagName("*");
    var totalele=all.length;
    var per_inc=100/all.length;

    var percent = document.getElementById('percentCount');

    if($(ele).on())
    {
        var prog_width=per_inc+Number(document.getElementById("progress_width").value);
        document.getElementById("progress_width").value=prog_width;
        $("#progress").animate({width:prog_width+"%"},75,function(){
            if(document.getElementById("progress").style.width=="100%")
            {
                $(".progress-bar").fadeOut("slow");
                window.location = "/login";
            }else{

                var rounded = Math.round(prog_width);
                percent.innerHTML = rounded + '%';
            }
        });
    }

    else
    {
        set_ele(ele);
    }
}

function set_ele(set_element)
{
    check_element(set_element);
}

window.onload = function() {

    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(".content.pre-scrollable").append('\n' +
                '                <div class="container-fluid input_fields_wrap">\n' +
                '\n' +
                '                    <hr>\n' +
                '\n' +
                '                    <div class="col-lg-2">\n' +
                '\n' +
                '                        <span>release date</span>\n' +
                '                        <div class="date">2018/01/17 &nbsp;00:00:00</div>\n' +
                '                        <div class="btn-group" data-toggle="buttons">\n' +
                '                            <label class="btn btn-primary active inactive">\n' +
                '                                <input type="radio" name="options" id="option1" autocomplete="off" checked/> open\n' +
                '                            </label>\n' +
                '                            <label class="btn btn-primary inactive">\n' +
                '                                <input type="radio" name="options" id="option2"> not open\n' +
                '                            </label>\n' +
                '                        </div>\n' +
                '                    </div>\n' +
                '\n' +
                '                    <div class="col-lg-7">\n' +
                '\n' +
                '           <textarea name="transmission" id="inputlg" cols="30" rows="10" class="form-control input-lg"></textarea>\n\n' +
                '                    </div>\n' +
                '\n' +
                '                    <div class="col-lg-3 align-center">\n' +
                '                        <button class="btn btn-primary">Approve</button>\n' +
                '                        <button class="btn btn-danger">Delete</button>\n' +
                '                    </div>\n' +
                '\n' +
                '                </div>\n' +
                '\n' +
                '                \n'); //add input box
        }
    });

    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
}


// $('.btn').button();

// $(document).ready(function() {
//     var max_fields      = 10; //maximum input boxes allowed
//     var wrapper         = $(".input_fields_wrap"); //Fields wrapper
//     var add_button      = $(".add_field_button"); //Add button ID
//
//     var x = 1; //initlal text box count
//     $(add_button).click(function(e){ //on add input button click
//         e.preventDefault();
//         if(x < max_fields){ //max input box allowed
//             x++; //text box increment
//             $(wrapper).append('<div class="container-fluid input_fields_wrap">\n' +
//                 '\n' +
//                 '                    <hr>\n' +
//                 '\n' +
//                 '                    <div class="col-lg-2">\n' +
//                 '\n' +
//                 '                        <span>release date</span>\n' +
//                 '                        <div class="date">2018/01/17 &nbsp;00:00:00</div>\n' +
//                 '                        <div class="btn-group" data-toggle="buttons">\n' +
//                 '                            <label class="btn btn-primary active">\n' +
//                 '                                <input type="radio" name="options" id="option1" autocomplete="off" checked/> open\n' +
//                 '                            </label>\n' +
//                 '                            <label class="btn btn-primary">\n' +
//                 '                                <input type="radio" name="options" id="option2"> not open\n' +
//                 '                            </label>\n' +
//                 '                        </div>\n' +
//                 '                    </div>\n' +
//                 '\n' +
//                 '                    <div class="col-lg-7">\n' +
//                 '\n' +
//                 '                            <input class="form-control input-lg" id="inputlg" type="text">\n' +
//                 '                    </div>\n' +
//                 '\n' +
//                 '                    <div class="col-lg-3 align-center">\n' +
//                 '                        <button class="btn btn-primary">Approve</button>\n' +
//                 '                        <button class="btn btn-danger">Delete</button>\n' +
//                 '                    </div>\n' +
//                 '\n' +
//                 '                </div>'); //add input box
//         }
//     });
//
//     $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
//         e.preventDefault(); $(this).parent('div').remove(); x--;
//     })
// });
// }
