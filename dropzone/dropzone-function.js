Dropzone.autoDiscover = false;
$scDropZoneConfig = {
    load: function(target){
        let myDropzone = new Dropzone(target, { 
            url: 'dropzone/upload.php',
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 2, // MB
            maxFiles: 1,
            acceptedFiles: "image/png,image/jpeg,image/jpg",
            renameFile: function (file) {
                let newName = new Date().getTime() + '_' + file.name;
                return newName;
            },
            });
        
            myDropzone.on("complete", function(file) {
                let { xhr, previewElement } = file;
                let element = previewElement;
                let attr = element.parentElement.getAttribute('data-input');
                if(!attr) return;
                let input = element.parentElement.querySelector(`input[name='${attr}']`);
                if(xhr.responseText){
                    input.value = xhr.responseText;  
                }
            });
    },
    getAllTargets: function(){
        let self = this;
        let targets = document.querySelectorAll(".js-dropzone-upload");
            targets.forEach(function(item){
                self.load(item);
            });
    },
    init: function(){
        this.getAllTargets();
    }
}

window.addEventListener("load", () => $scDropZoneConfig.init());