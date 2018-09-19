$(function(){
    // 入力値をリセット
    $('#clearForm').bind('click', function(){
       $(this.form).find("textarea, :text, select").val("").end().find(":checked").prop("checked", false);
   });
