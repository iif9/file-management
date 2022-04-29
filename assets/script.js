const fileZone = document.getElementById('file-zone');
const showFiles = document.getElementById('display-files');
const uploadBtn = document.getElementById('upload-btn');

let filesArray = [];


function isImage(file){
    if(file.type.includes('image')){
        return true;
    }
    return false
}


// drag and drop
fileZone.addEventListener('dragover',dragFile)
fileZone.addEventListener('drop',dropFile)

function dragFile(event){
    event.preventDefault();
}

function dropFile(event){  
    event.preventDefault();

    let files = Array.from(event.dataTransfer.files);
    if(files.length > 0){
    filesArray = event.dataTransfer.files
    addFile(files);
    }
    
}

function addFile(files){
    showFiles.innerHTML = '';

    files.forEach(file => {
      
            const span = document.createElement('span');
            span.className ='col-lg-4 col-md-6 col-sm-12';
          
            span.innerHTML=`
            <span style=""font-size:5em; height:100px;width:100px;"  class="ms-2 col-2  fill  text-dark material-symbols-outlined" >
            ${isImage(file)?'image':'draft'} 
            </span>
            <span class="col">${file.name}</span>
            `
        
        return showFiles.appendChild(span);

    })
}

// drop and drag window behavior 

window.addEventListener('dragenter',(event)=>{
    event.preventDefault()
})

window.addEventListener('dragover',(event)=>{
    event.preventDefault()
})
window.addEventListener('drop',(event)=>{
    event.preventDefault()
})


// upload button

uploadBtn.addEventListener('click',uploadFiles)



function uploadFiles(){
    if(filesArray.length <= 0)return
    const form = document.createElement('form')
    form.action = '/upload'
    form.method = 'POST'
    form.enctype = 'multipart/form-data'
    form.style='display:none'
    form.appendChild(createInput(filesArray))
    document.body.appendChild(form)
    form.submit();
}

function createInput(files){
    const input = document.createElement('input')
    input.type = 'file'
    input.name = 'files'
    input.multiple = true
    input.files= files;

    return input;
}