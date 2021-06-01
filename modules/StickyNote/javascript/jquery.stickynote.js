(function($) {
  $.fn.stickynote = function(options) {
    var opts = $.extend({}, $.fn.stickynote.defaults, options);
    return this.each(function() {
      $this = $(this);
      var o = $.meta ? $.extend({}, opts, $this.data()) : opts;
      switch(o.event){
        case 'dblclick':
          $this.dblclick(function(e){$.fn.stickynote.createNote(o);})
          break;
        case 'click':
          $this.click(function(e){$.fn.stickynote.createNote(o);})
          break;
        case 'load':
            $.fn.stickynote.createNote(o);
          break;
      }   
    });
  };
  $.fn.stickynote.defaults = {
    size  : 'small',
    event : 'click',
    color : '#000000'
  };
  $.fn.stickynote.createNote = function(o) {
    var iLeft = 0;
    var iTop = 0;
    var _note_content = $(document.createElement('textarea'));
    var _div_note   =   $(document.createElement('div'))
              .addClass('jStickyNote')
              .css('cursor','move');
    if(!o.text){
      _div_note.append(_note_content);
      var _div_create = $(document.createElement('div'))
            .addClass('jSticky-create')
            .attr('title','Create Sticky Note');
      _div_create.click(function(e){
        var sticky_content =  $(this)
        .parent()
        .find('textarea');
        iLeft = $(_div_wrap).css('left');
        iTop = $(_div_wrap).css('top');
        if($(_div_wrap).attr("id"))
        {
            ajaxStatus.showStatus(SUGAR.language.get('app_strings', 'LBL_SAVING'));
          $.ajax({
              type: 'POST',
              url: "index.php?module=StickyNote&action=StickySave",
              data: ({sugar_body_only: true, content : sticky_content.val(), position_left : iLeft, position_top : iTop ,id : $(_div_wrap).attr("id")}),
              success: function(data) {
                   ajaxStatus.flashStatus(SUGAR.language.get('app_strings', 'LBL_DONE'));
              }
          });
        }
         else
         {
             ajaxStatus.showStatus(SUGAR.language.get('app_strings', 'LBL_SAVING'));
             $.ajax({
                  type: 'POST',
                  url: "index.php?module=StickyNote&action=StickySave",
                  data: ({sugar_body_only: true, content : sticky_content.val(), position_left : iLeft, position_top : iTop}),
                  success: function(data) {
                     $(_div_wrap).attr('id',data);
                      ajaxStatus.flashStatus(SUGAR.language.get('app_strings', 'LBL_DONE'));
                  }
              });
          }
      });
    } 
    else
      _div_note.append('<p style="color:'+o.color+'">'+o.text+'</p>');         
    
    var _div_delete =   $(document.createElement('div'))
              .addClass('jSticky-delete');
    _div_delete.click(function(e){
              if(confirm("Are you sure you want to delete the record?")){
                 $(this).parent().remove();
                  $.ajax({
                      type: 'POST',
                      url: "index.php?module=StickyNote&action=StickySave",
                      data: ({sugar_body_only: true, delete_sug: true, id : $(_div_wrap).attr("id")}),
                      success: function(data) {
                           ajaxStatus.flashStatus(SUGAR.language.get('app_strings', 'LBL_DONE'));
                      }
                  });  
              }
              
    });
    
     if(o.fetched_id){
       _note_content.val(o.content);
       var _div_wrap  =   $(document.createElement('div'))
              .attr('id',o.fetched_id)
              .css({'position':'absolute','top':o.top,'left':o.left})
              .append(_div_note)
              .append(_div_delete)
              .append(_div_create); 
     }
     else
     {
       var _div_wrap  =   $(document.createElement('div'))
              .css({'position':'absolute','top':'0','left':'0'})
              .append(_div_note)
              .append(_div_delete)
              .append(_div_create); 
       
     }
    
    switch(o.size){
      case 'large':
        _div_wrap.addClass('jSticky-large');
        break;
      case 'small':
        _div_wrap.addClass('jSticky-medium');
        break;
    }   
    if(o.containment){
      _div_wrap.draggable({ containment: '#'+o.containment , scroll: false ,start: function(event, ui) {
        if(o.ontop)
          $(this).parent().append($(this));
      }});  
    } 
    else{
      _div_wrap.draggable({ scroll: false ,start: function(event, ui) {
        if(o.ontop)
          $(this).parent().append($(this));
      } ,stop : function(event,ui){
        //For Update Position on release
        var iTop = $(this).css('top');
        var iLeft = $(this).css('left');
        if($(_div_wrap).attr("id"))
        {
            ajaxStatus.showStatus(SUGAR.language.get('app_strings', 'LBL_SAVING'));
            $.ajax({
                type: 'POST',
                url: "index.php?module=StickyNote&action=StickySave",
                data: ({sugar_body_only: true, content : _note_content.val(), position_left : iLeft, position_top : iTop ,id : $(_div_wrap).attr("id")}),
                success: function(data) {
                    ajaxStatus.flashStatus(SUGAR.language.get('app_strings', 'LBL_DONE'));
               }
            });
          }
           else
           {
               ajaxStatus.showStatus(SUGAR.language.get('app_strings', 'LBL_SAVING'));
               $.ajax({
                    type: 'POST',
                    url: "index.php?module=StickyNote&action=StickySave",
                    data: ({sugar_body_only: true, content : _note_content.val(), position_left : iLeft, position_top : iTop}),
                    success: function(data) {
                       $(_div_wrap).attr('id',data);
                       ajaxStatus.flashStatus(SUGAR.language.get('app_strings', 'LBL_DONE'));
                    }
                });
            }
      }});  
    }
    $('#content').append(_div_wrap);
  };
    //Sticky note initialization
      if(action_sugar_grp1 != 'Login')
        {
            $(function() {
                if($("#createSticky").length == 0) {
                    $("<pre><div id='createSticky'><button id='btnstick' class='button primary'>S\nT\nI\nC\nK\nY</button></div></pre><div id='showSticky'></div>").appendTo("body");
                    $("#createSticky").css({'position':'fixed','z-index':1000,'width':15});
                    $("#btnstick").css({'width':14,'padding':0,'height':'120px','white-space':'normal'});
                    var winH = 460;
                    if (parseInt(navigator.appVersion)>3) 
                    {
                       if (navigator.appName=="Netscape") 
                        winH =  document.documentElement.clientHeight/2;
                       if (navigator.appName.indexOf("Microsoft")!=-1)
                        winH = document.documentElement.clientHeight/2;
                    }
                    document.getElementById('createSticky').style.top=(winH-30)+'px';
                }
                });
        }
       $.ajax({
            type: 'POST',
            url: "index.php?module=StickyNote&action=StickySave",
            data: ({sugar_body_only: true, value : "getrecords"}),
            success: function(data) {
              if(data!='')
              {
                  var jsondata = eval(data);
                  for(var cnt=0; cnt<jsondata.length; cnt++){
                      $("#showSticky").stickynote({
                        size       : 'small',
                        event      : 'load',
                        fetched_id : jsondata[cnt].id,
                        content    : jsondata[cnt].content,
                        left       : jsondata[cnt].left_pos,
                        top        : jsondata[cnt].top_pos
                      });
                  }
              }
            }
          });  
        $("#createSticky").stickynote({
            size             : 'small',
            event            : 'click',
            id         : 'unique_id'
        });
})(jQuery);