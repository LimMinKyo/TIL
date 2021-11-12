// 영상링크: https://www.youtube.com/watch?v=s1vpVCrT8f4&list=PLv2d7VI9OotTVOL4QmPfvJWPJvkmv6h-2&index=11&t=2s

'use strict';

// Javascript is syncronous.
// Execute the code block in order after hoisting.
// hoisting이란 자동적으로 선언들이 제일 위로 올라가는 것. hoisting이 된 이후부터 코드가 나타나는 순서대로 자동적으로 실행이 된다.
console.log('1');
setTimeout(() => console.log('2'), 1000);
console.log('3');

// Synchronous callback
function printImmediately(print){
  print();
}
printImmediately(() => console.log("hello"));

// Asynchronous callback
function printWithDelay(print, timeout){
  setTimeout(print, timeout);
}
printWithDelay(() => console.log("async callback"), 2000);

// Callback Hell example
class UserStorage {
  loginUser(id, password, onSuccess, onError){
    setTimeout(() => {
      if (
        (id === "ellie" && password === "dream") ||
        (id === "coder" && password === "academy")
      ){
        onSuccess(id);
      } else {
        onError(new Error("not found"));
      }
    }, 2000);
  }

  getRoles(user, onSuccess, onError){
    setTimeout(() => {
      if (user === "ellie") {
        onSuccess({name: "ellie", role: "admin"});
      } else {
        onError(new Error("no access"))      
      }
    }, 1000);
  }
}

const userStrage = new UserStorage();
const id = prompt("enter your id");
const password = prompt("enter your password");
userStrage.loginUser(
  id, 
  password,
  user => {
    userStrage.getRoles(
      user,
      userWithRole => {
        alert(`Hello ${userWithRole.name}, you have ${userWithRole.role} role.`);
      },
      error => {
        console.log(error);
      }
    );
  },
  error => {
    console.log(error);
  }
  );