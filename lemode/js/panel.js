function validateForm() {
    var x = document.forms["menu"]["link"].value;
    var errMsgHolder = document.getElementById('nameErrMsg');
    if (!(/^\S{1,}$/.test(x))) {
      errMsgHolder.innerHTML =
          'Name cannot contain whitespace';
      return false;
    }else {
      errMsgHolder.innerHTML = '';
      return undefined;
     }

}
