# CSS Position

## Position 종류
1. static (기본값)
2. relative
3. absolute
4. fixed
5. sticky

## Position 특징
- 태그에 둘다 포지션이 없으면 코딩 순서대로 z-index 우위
- 태그에 둘중 하나만 포지션이 있으면 포지션 있는 태그가 z-index 우위
- 둘다 있으면 다시 코딩 순서대로 z-index 우위

- position을 주면 inline-block 형태로 바뀐다.

- position:absolute 나 float은 width와 height가 없어진다.

- z-index는 포지션이 있을때만 사용한다.