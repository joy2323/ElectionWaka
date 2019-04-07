
// alert(localStorage.getItem('user'));
// var j = jQuery.noConflict();
// j(document).ready(function(){
//     // var jq = $.noConflict();
//     $.get('/api/all',function(res){
//         // console.log(res);
//         var allData=[];       
//         console.log(res[0]['question']);
//         allData.push(res);
//         // res.map((x,y,z,)=>{
//         //     // $('#question').append(`<div class="step-tab-panel" id="open${y}">${z[y]['question']}</div>`);
            
//         //     console.log(z[y]['answer']);
//         //     if(z[y]['answer']){
//         //         z[y]['answer'].map((a,b,c)=>{
//         //             console.log(`hello ${b}`);
//         //             $(`#open${y}`).append(`<div class="panel panel-default">${c[b]['answer']}
//         //             <p>by ${c[b]['candidate']['name']}</p>
//         //             <div class="col-offset-md-7"><input type="radio" name="candidate_id${y}" value="${c[b]['candidate']['id']}"></div>
//         //             </div>`);sss
//         //     });
//         //     }
//         //     else{
//         //         $(`#open${y}`).append(`<div>No answer</div>`); 
//         //     }
//         // });
//     //     // localStorage.setItem({res});
        
//     //     // $(`#open${0}`).show();    
//     //     // console.log(`all my this is ${allData}`);
//     //     console.log(allData);
//     j('#question').pagination({
//         dataSource:function(done) {
//             $.ajax({
//                 type: 'GET',
//                 url: '/api/all',
//                 success: function(response) {
//                     done(response);
//                 }
//             });
//          },
//         callback:function(data,pagination){
//             var html=template(data);
//             dataContainer.html(html);
//         }
//     });
        
//     });
//     // // $("#question").steps({
//     // //     // headerTag:"",
//     // //     // bodyTag:"div.open",
//     // //     // transitionEffect:"slideLeft",
//     // //     // autofocus:true
//     // //     onFinish:function(){ alert('done');}
//     // // });
//     // // var current_fs,next_fs,previous_fs;
//     // // var left,opacity,scale;
//     // // var animating;
//     // j('#question').pagination({
//     // dataSource: function(done) {
//     //     $.ajax({
//     //         type: 'GET',
//     //         url: '/api/all',
//     //         success: function(response) {
//     //             done(response);
//     //             console.log(response);
//     //         }
//     //     });
//     //  }
//     // });
   
// });

// $(document).ready(function(){

// });
function check(tes,y){
    for(let i=0; i<tes.length; i++){
        console.log(tes[i]);
        console.log(y);
        if(tes[i]==y){
            return true;
        }
    }
}
function test(x,y){
    post=localStorage.getItem('post');
    quest=localStorage.getItem('quest');
    if(post && quest){
        var tes=JSON.parse(localStorage.getItem("quest"));
        questi=check(tes,y);
        console.log(questi);
        if(questi){
            
            var test=JSON.parse(localStorage.getItem("post"));
            test.pop();
            console.log(test);
            test.push(x);
            localStorage.setItem("post",JSON.stringify(test));
            console.log(test);
            console.log(tes);    
        }else{
        var test=JSON.parse(localStorage.getItem("post"));
        tes.push(y);
        test.push(x);
        localStorage.setItem("post",JSON.stringify(test));
        localStorage.setItem("quest",JSON.stringify(tes));
        console.log(test);
        console.log(tes);
        }
    }else{
        var k=JSON.stringify([x]);
        var l=JSON.stringify([y]);
        localStorage.setItem("post",k);
        localStorage.setItem("quest",l);
        console.log(k);
        console.log(l);
    }
    
    // p=localStorage.getItem('candidate_id');/
}
(function checks(){
    
    var question=JSON.parse(localStorage.getItem('quest'));
    if(question.length != 20){
        // alert('You have not completed the poll');
        var button=document.getElementById("k");
        button.disabled=true;
        return false;
    }else{
        $('#lik').hide();
        k.disabled=false;
        return true;
    }
});
function submit(){
    if(checks()==true){
        result=JSON.parse(localStorage.getItem("post"));
        allresults={};
        for(let i=0; i<result.length; i++){
            if(allresults.hasOwnProperty(`candidate${result[i]}`)){
                allresults[`candidate${result[i]}`]+=1        
            }else if(!allresults.hasOwnProperty(`candidate${result[i]}`)){
                var t=`candidate${result[i]}`;
                allresults[t]=1;
            }
        }
        // console.log(allresults);
        var allresult=[];
        $.each(allresults, function(key, value){
            console.log(key.slice(-1));
            allresult.push({
                candidate_id: key.slice(-1),
                score : value/20*100
            });
        });
        console.log(allresult);
        axios.post('/api/request',{
            'email':localStorage.getItem('user'),
            'allresult':allresult
        }).then(res=>{
            if(res.data.status==201){
                alert("Thank you for taking the poll");
            }else{
                alert("Opps!!! something went wrong");
            }
        });
        // console.log(allresults);
        var tt=localStorage.getItem('user');
        window.location.replace(`/user/result/${tt}`);
        localStorage.clear();
    // console.log($.post());
    }
}
