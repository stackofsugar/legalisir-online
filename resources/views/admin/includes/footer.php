</div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <strong>Copyright &copy; Fakultas Teknologi Informasi Dan Sains Data - 2023 </strong>
      </footer>
    </div><!-- ./wrapper -->
 <!-- jQuery 2.1.3 -->
 <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- jQuery UI 1.11.2 -->
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
    <!-- Morris.js charts -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js" type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
    <script>
      function showAnswerOptions() {
      var questionType = document.getElementById("questionType").value;
      var answerOptions = document.getElementById("answerOptions");
      var answerEssay = document.getElementById("answerEssay");

      if (questionType === "pilihan") {
        answerOptions.style.display = "block";
        answerEssay.style.display = "none";
      } else if (questionType === "essai") {
        answerOptions.style.display = "none";
        answerEssay.style.display = "block";
      }
    }
    </script>

<!-- <script>
  var questionCount = 1; // Menghitung jumlah kotak pertanyaan yang ditambahkan

  function addQuestionBox() {
    questionCount++; // Menambah jumlah kotak pertanyaan yang ditambahkan

    var questionContainer = document.getElementById("questionContainer");

    // Membuat elemen kotak pertanyaan baru
    var newQuestionBox = document.createElement("div");
    newQuestionBox.id = "questionBox" + questionCount;
    newQuestionBox.className = "box";
    newQuestionBox.style.border = "0.5px solid";
    newQuestionBox.style.borderRadius = "10px";

    // Menyalin isi dari kotak pertama ke kotak baru
    var questionBoxTemplate = document.getElementById("questionBox");
    newQuestionBox.innerHTML = questionBoxTemplate.innerHTML;

    // Menambahkan kotak pertanyaan baru ke dalam kontainer
    questionContainer.appendChild(newQuestionBox);

    // Mengupdate ID elemen-elemen dalam kotak baru
    updateElementIds(newQuestionBox, questionCount);
  }

  function updateElementIds(questionBox, questionIndex) {
    var elements = questionBox.getElementsByTagName("*");
    for (var i = 0; i < elements.length; i++) {
      var element = elements[i];
      var id = element.id;
      if (id !== "") {
        var newId = id + questionIndex;
        element.id = newId;
        // Mengupdate atribut 'for' pada label
        if (element.tagName === "LABEL") {
          var htmlFor = element.getAttribute("for");
          if (htmlFor !== null && htmlFor !== "") {
            var newFor = htmlFor + questionIndex;
            element.setAttribute("for", newFor);
          }
        }
      }
    }
  }

  function showAnswerOptions() {
    var questionType = document.getElementById("questionType").value;
    var answerOptions = document.getElementById("answerOptions" + questionCount);
    var answerEssay = document.getElementById("answerEssay" + questionCount);

    if (questionType === "pilihan") {
      answerOptions.style.display = "block";
      answerEssay.style.display = "none";
    } else if (questionType === "essai") {
      answerOptions.style.display = "none";
      answerEssay.style.display = "block";
    }
  }
</script> -->

    
  </body>
</html>