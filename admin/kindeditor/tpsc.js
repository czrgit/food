
var editor;
KindEditor.ready(function (K){
	var editor=K.editor({
		allowFileManager:true
		});
K('#image3').click(function (){
		editor.loadPlugin('image',function(){
			editor.plugin.imageDialog({
			showRemote:true,
			imageUrl:K('#url3').val(),
			clickFn:function (url,title,width,height,border,align){
				K('#url3').val (url);
				editor.hideDialog();
				}
				});	
				});
				});
K('#image4').click(function (){
		editor.loadPlugin('image',function(){
			editor.plugin.imageDialog({
			showRemote:true,
			imageUrl:K('#url4').val(),
			clickFn:function (url,title,width,height,border,align){
				K('#url4').val (url);
				editor.hideDialog();
				}
				});	
				});
				});
K('#image5').click(function (){
		editor.loadPlugin('image',function(){
			editor.plugin.imageDialog({
			showRemote:true,
			imageUrl:K('#url5').val(),
			clickFn:function (url,title,width,height,border,align){
				K('#url5').val (url);
				editor.hideDialog();
				}
				});	
				});
				});
K('#image6').click(function (){
		editor.loadPlugin('image',function(){
			editor.plugin.imageDialog({
			showRemote:true,
			imageUrl:K('#url6').val(),
			clickFn:function (url,title,width,height,border,align){
				K('#url6').val (url);
				editor.hideDialog();
				}
				});	
				});
				});
});

