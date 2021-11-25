# dropzone
sistema de upload de imagens através de drag and drop dinâmico para trabalhar com PHP


#Formulário
Você pode ter mais de drag and drop no mesmo formulário, basta usar esse padrão e trocar os termos destacados
```html
<div class="file_upload dropzone js-dropzone-upload" data-input="upload">
    <input type="hidden" name="upload"/>
    <div class="dz-message needsclick">
        <strong>Solte os arquivos aqui ou clique para fazer o upload.</strong><br />
    </div>
</div>
```

O *data-input="upload"* se refere ao *name* do input que está dentro do formulário para que você possa retornar da api a url da imagem e consequentemente salvar no seu banco, ou seja lá, adaptar na função que for fazer.

#### Recomendo que caso use mais de um drag and drop no mesmo formulário, troque o *data-input* e o name do input para evitar conflito na hora de receber as informações no backend
