# Laravel asset(js/app.js) vs mix(js/app.js)

Laravel 과 vue를 연동할 때, public/js/app.js 파일을 아래 두 가지 방법으로 가져올 수 있습니다.

```html
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ mix('js/app.js') }}"></script>
```

**결론 먼저 작성하면 mix를 쓰는게 맞습니다.**

global 함수 mix를 사용하게 된 계기는 version과 cache 때문입니다. 웹 개발을 하다보면 brower의 cache 기능 때문에 변경한 사항이 종종 반영되지 않아서 뭐야? 왜 반영이 안돼? 하고 시간을 허비하게 되는 경험을 하게 됩니다.

Laravel에서는 이 현상을 해결하기 위해 mix의 version 함수를 제공합니다.

webpack.mix.js 파일에 version 함수를 추가하고 npm run dev 명령으로 css와 js 파일을 빌드 후 public/mix-manifest.json 파일을 열어보면 js와 css가 빌드된 버전의 해쉬 값이 붙어있습니다.

**laravel-mix docs 에서는 설령 version 함수를 사용하지 않는다 하더라고 mix함수를 써야 할 것을 권고하고 있습니다.**

---

- 출처: https://medium.com/sjk5766/laravel-asset-js-app-js-vs-mix-js-app-js-e0d5d482484a