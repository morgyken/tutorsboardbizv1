<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{URL::asset('froala/css/froala_editor.css')}}">
  <link rel="stylesheet" href="{{URL::asset('froala/css/froala_style.css ')}}">
  <link rel="stylesheet" href="{{URL::asset('froala/css/plugins/code_view.css ')}}">
  <link rel="stylesheet" href="{{URL::asset('froala/css/plugins/draggable.css ')}}">
  <link rel="stylesheet" href="{{URL::asset('froala/css/plugins/colors.css ')}}">
  <link rel="stylesheet" href="{{URL::asset('froala/css/plugins/emoticons.css')}}">
  <link rel="stylesheet" href="{{URL::asset('froala/css/plugins/image_manager.css ')}}">
  <link rel="stylesheet" href="{{URL::asset('froala/css/plugins/image.css')}}">
  <link rel="stylesheet" href="{{URL::asset('froala/css/plugins/line_breaker.css ')}}">
  <link rel="stylesheet" href="{{URL::asset('froala/css/plugins/table.css')}}">
  <link rel="stylesheet" href="{{URL::asset('froala/css/plugins/char_counter.css ')}}">
  <link rel="stylesheet" href="{{URL::asset('froala/css/plugins/video.css')}}">
  <link rel="stylesheet" href="{{URL::asset('froala/css/plugins/fullscreen.css')}}">
  <link rel="stylesheet" href="{{URL::asset('froala/css/plugins/file.css ')}}">
  <link rel="stylesheet" href="{{URL::asset('froala/css/plugins/quick_insert.css')}}">
  <link rel="stylesheet" href="{{URL::asset('froala/css/plugins/help.css')}}">
  <link rel="stylesheet" href="{{URL::asset('froala/css/third_party/spell_checker.css')}}">
  <link rel="stylesheet" href="{{URL::asset('froala/css/plugins/special_characters.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">

  <style>
      body {
          text-align: center;
      }

      div#editor {
          margin: auto;
          text-align: left;
      } 

      .ss {
        background-color: red;
      }
  </style>
</head>

<body>
  
  <div id="editor">
      <textarea id='edit' style="margin-top: 30px;" name="question_body">
        <h1>Full Featured</h1>

        <p>This is the full featured Froala WYSIWYG HTML editor.</p>

        <img class="fr-fir fr-dii" src="../../img/photo1.jpg" alt="Old Clock" width="300"/>Lorem  <strong>ipsum</strong> dolor sit amet, consectetur <strong>adipiscing <em>elit.</em> Donec</strong> facilisis diam in odio iaculis blandit. Nunc eu mauris sit amet purus <strong>viverra</strong><em> gravida</em> ut a dui.<br/>
        <ul><li>Vivamus nec rutrum augue, pharetra faucibus purus. Maecenas non orci sagittis, vehicula lorem et, dignissim nunc.</li> <li>Suspendisse suscipit, diam non varius facilisis, enim libero tincidunt magna, sit amet iaculis eros libero sit amet eros. Vestibulum a rhoncus felis.<ol><li>Nam lacus nulla, consequat ac lacus sit amet, accumsan pellentesque risus. Aenean viverra mi at urna mattis fermentum.</li> <li>Curabitur porta metus in tortor elementum, in semper nulla ullamcorper. Vestibulum mattis tempor tortor quis gravida. In rhoncus risus nibh. Nullam condimentum dapibus massa vel fringilla. Sed hendrerit sed est quis facilisis. Ut sit amet nibh sem. Pellentesque imperdiet mollis libero.</li></ol></li>
        </ul>
       </textarea>
</div>
  
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js">
    
  </script>

  <script type="text/javascript" src="{{URL::asset('froala/js/froala_editor.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('froala/js/plugins/align.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('froala/js/plugins/char_counter.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('froala/js/plugins/code_beautifier.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('froala/js/plugins/code_view.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('froala/js/plugins/colors.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('froala/js/plugins/draggable.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('froala/js/plugins/emoticons.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('froala/js/plugins/entities.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('froala/js/plugins/file.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('froala/js/plugins/font_size.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('froala/js/plugins/font_family.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('froala/js/plugins/fullscreen.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('froala//js/plugins/image.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('froala/js/plugins/image_manager.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('froala/js/plugins/line_breaker.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('froala/js/plugins/inline_style.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('froala/js/plugins/link.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('froala/js/plugins/lists.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('froala/js/plugins/paragraph_format.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('froala/js/plugins/paragraph_style.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('froala/js/plugins/quick_insert.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('froala/js/plugins/quote.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('froala/js/plugins/table.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('froala/js/plugins/save.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('froala/js/plugins/url.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('froala/js/plugins/video.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('froala/js/plugins/help.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('froala/js/plugins/print.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('froala/js/third_party/spell_checker.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('froala/js/plugins/special_characters.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('froala/js/plugins/word_paste.min.js')}}"></script>

  <script>
    $(function(){
      $('#edit').froalaEditor()
    });
  </script>
</body>
</html>