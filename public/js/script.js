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
        $("#progress").animate({width:prog_width+"%"},10,function(){
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