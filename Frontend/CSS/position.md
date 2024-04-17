# CSS Position

## Position 종류

1. static (기본값)
2. relative
3. absolute
4. fixed
5. sticky

## Position 특징

- 태그에 둘다 포지션이 없으면 코딩 순서대로 z-index 우위 <br>
  태그에 둘중 하나만 포지션이 있으면 포지션 있는 태그가 z-index 우위 <br>
  둘다 있으면 다시 코딩 순서대로 z-index 우위

- position을 주면 inline-block 형태로 바뀐다.

- position:absolute 나 float은 width와 height가 없어진다.

- z-index는 포지션이 있을때만 사용한다.

## position: absolute

- absolute는 부모에 포지션이 없으면 body, 화면을 기준으로 적용되고 <br>
  부모에 포지션 속성이 있으면 부모를 기준으로 absolute가 적용이 된다.
