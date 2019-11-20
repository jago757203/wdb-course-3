document.addEventListener("DOMContentLoaded", function () {
document.querySelector(".send-message")
.addEventListener("click", send_message)
;

setInterval(read_message, 500);

})

function send_message() {
   let user  =  document.querySelector(".user-name").value;
   let message  =  document.querySelector(".message").value;

   let record_list = [];
   let record_string = localStorage.getItem("chat-messages");
   if (record_string) {
    record_list = JSON.parse(record_string)

   }


   let record = {
       "user-name":user,
       "message-value": message
   }
   record_list.push(record);

    record_string = JSON.stringify(record_list);

  localStorage.setItem("chat-messages", record_string);
   
}

function read_message() {
    let record_string = localStorage.getItem("chat-messages");
    let record_list = JSON.parse(record_string);

    let output = "";
    record_list.forEach(function (record){
        output = output + record["user-name"] + " : " 
        + record["message-value"] + "<br>";
    });

    document.querySelector(".messages").innerHTML = output
    
  
    
}