

$(".btnedit").click( e =>{
  // console.log("edit btn clicked");
    let textvalues = displayData(e);
    console.log(textvalues);
    let username = $("input[name*='newNameA']");
    let permission = $("input[name*='permissionA']");
    let pwd = $("input[name*='pwdA']");
    let fname = $("input[name*='fNameA']");
    let lname = $("input[name*='lNameA']");
    let email = $("input[name*='emailA']");
    let link = $("input[name*='linkA']");
    let linkName = $("input[name*='linkNameA']");

    username.val(textvalues[0]);
    permission.val(textvalues[1]);
    pwd.val(textvalues[2]);
    fname.val(textvalues[3]);
    lname.val(textvalues[4]);
    email.val(textvalues[5]);
    link.val(textvalues[6]);
    linkName.val(textvalues[7]);
});



function displayData(e) {
  let i = 0;
  const td = $("#tbody tr td");
  let textvalues = [];
  for (const value of td){
    if(value.dataset.id==e.target.dataset.id){
      // console.log(value);
      // console.log(e.target.dataset.id);
      textvalues[i++] = value.textContent;
    }
  }
  return textvalues;
}
