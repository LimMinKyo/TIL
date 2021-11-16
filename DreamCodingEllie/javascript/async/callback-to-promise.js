// 영상링크: https://www.youtube.com/watch?v=JB_yU6Oe2eE&list=PLv2d7VI9OotTVOL4QmPfvJWPJvkmv6h-2&index=12

class UserStorage {
  loginUser(id, password){
    return new Promise((resolve, reject) => {
      setTimeout(() => {
        if (
          (id === "ellie" && password === "dream") ||
          (id === "coder" && password === "academy")
        ){
          resolve(id);
        } else {
          reject(new Error("not found"));
        }
      }, 2000);
    });   
  }

  getRoles(user){
    return new Promise((resolve, reject) => {
      setTimeout(() => {
        if (user === "ellie") {
          resolve({name: "ellie", role: "admin"});
        } else {
          reject(new Error("no access"))      
        }
      }, 1000);
    });    
  }
}

const userStorage = new UserStorage();
const id = prompt("enter your id");
const password = prompt("enter your password");
userStorage
  .loginUser(id, password)
  .then(userStorage.getRoles)
  .then(user => alert(`Hello ${user.name}, you have ${user.role} role.`))
  .catch(console.log);