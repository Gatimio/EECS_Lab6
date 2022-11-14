function checker() {
    let user = document.getElementById("username").value;
    let pass = document.getElementById("password").value;
    let vaseSet = document.getElementById("vaseSet").value;
    let wallLamp = document.getElementById("wallLamp").value;
    let mug = document.getElementById("mug").value;
  
    if (
      vaseSet.length == 0 ||
      wallLamp.length == 0 ||
      mug.length == 0 ||
      user.length == 0 ||
      pass.length == 0
    ) {
      window.alert("No empty fields allowed!");
      return false;
    }
  
    if (vaseSet < 0 || wallLamp < 0 || mug < 0) {
      window.alert("Quantities cannot be negative!");
      return false;
    }
  
    if (document.querySelector('input[name="shipping"]:checked') == null) {
      window.alert("You need to choose a shipping option!");
      return false;
    }
  
    return true;
  }