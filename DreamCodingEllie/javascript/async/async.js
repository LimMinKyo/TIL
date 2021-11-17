// 영상링크: https://www.youtube.com/watch?v=aoQSOZfz3vQ&t=301s

// async & await
// clear style of using promise :)

// 1. async
// function fetchUser() {
//   return new Promise((resolve, reject) => {
//     // do network request in 10 secs....
//     resolve('ellie');
//   });
// }
async function fetchUser() {
  // do network request in 10 secs....
  return 'ellie'
}

const user = fetchUser();
user.then(console.log);
console.log(user);

// 2. await ✨
function delay(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

async function getApple() {
  await delay(2000);
  // throw 'error';
  return '🍎';
}

// function getBanana() {
//   return delay(1000)
//   .then(() => '🍌');
// }
async function getBanana() {
  await delay(1000);
  return '🍌';
}

// function pickFruits() {
//   return getApple().then(apple => {
//     return getBanana().then(banana => `${apple} + ${banana}`)
//   });
// }
async function pickFruits() {
  // try { // 에러 핸들링
    const applePromise = getApple(); // 만드는 순간 바로 실행 // 병렬적으로 기능을 수행할 수 있을 경우 이런 식으로 작성하지 않음. -> Promise.all() API 사용
    const bananaPromise = getBanana(); // 만드는 순간 바로 실행
    const apple = await applePromise;
    const banana = await bananaPromise;
  // } catch () {

  // }
  return `${apple} + ${banana}`;
}

pickFruits().then(console.log);

// useful Promise APIs
function pickAllFruits() {
  return Promise.all([getApple(), getBanana()]).then(fruits => fruits.join(' + '));
}

pickAllFruits().then(console.log);

function pickOnlyOne() {
  return Promise.race([getApple(), getBanana()]);
}

pickOnlyOne().then(console.log);