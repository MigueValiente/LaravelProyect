document.addEventListener('DOMContentLoaded',function(){
    let input = document.getElementById('job_name');
    input.addEventListener('change',function(event){
        let valor = event.target.value;
        valor = trim(valor);
    });
});
