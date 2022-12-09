function validateName() {
    var name = document.getElementById('name').value;
    if(name == null || name == undefined || name == '') {
      alert('Name is required');
      return;
    }
    if(name.length < 2) {
      alert('Name should be at least 2 characters long');
    }
}