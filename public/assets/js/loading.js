var waitingDialog=waitingDialog||(function($){
	'use strict';
	var $dialog=$(
		'<div class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true" style="overflow-y:visible;">'+
		'<div class="modal-dialog modal-m">'+
		'<div class="modal-content">'+
		'<div class="modal-header"><h3 style="margin:0;"></h3></div>'+
		'<div class="modal-body">'+
		'<div class="progress progress-striped active" style="margin-bottom:0;"><div class="progress-bar" style="width: 100%; height: 100%"></div></div>'+
		'</div>'+
		'</div></div></div>');
	return{
		show:function(message,options){
			if(typeof options==='undefined'){
				options={

				};
			}if(
				typeof message==='undefined')
			{message='Loading'
			;}
			var settings=$.extend({
				dialogSize:'m',progressType:'',onHide:null
			},
			options
			);
			$dialog.find('.modal-dialog').attr('class','modal-dialog').addClass('modal-'+settings.dialogSize);$dialog.find('.progress-bar').attr('class','progress-bar');
			if(settings.progressType){
				$dialog.find('.progress-bar').addClass('progress-bar-'+settings.progressType);
			}
			$dialog.find('h3').text(message);
			if(typeof settings.onHide==='function'){
				$dialog.off('hidden.bs.modal').on('hidden.bs.modal',function(e)
					{settings.onHide.call($dialog);
					});
			}
			$dialog.modal();
		},hide:function(){
			$dialog.modal('hide');
		}
	};
})
(jQuery);

var barraEspera=barraEspera||(function($){
	'use strict';
	var $dialog=$(
			'<div class="preloader-wrapper big active" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true" style="overflow-y: visible;">'+
			'<div class="spinner-layer spinner-blue">'+
			'<div class="circle-clipper left">'+
			'<div class="circle"></div>'+
			'</div><div class="gap-patch">'+
			'<div class="circle"></div>'+
			'</div><div class="circle-clipper right">'+
			'<div class="circle"></div>'+
			'</div>'+
			'</div>'
		);
	return{
		show:function(message,options){
			if (typeof options==='undefined') {
				options={

				};
			}if(typeof message==='undefined'){
				message='Procesando';
			}

			var	
		};
	};
})

2593-5278

2231-2958