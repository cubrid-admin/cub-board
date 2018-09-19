# cub-board
auto board generation system for cubrid-cms

CMS를 포팅하기 앞서 CMS를 이해하기 위한 일환으로 cub-board를 만들어 보겠습니다.
일단 이 cub-board의 최종 목표는 사용자가 게시판을 자동으로 생성할 수 있도록 하는 것입니다.
본 시스템이 완성되면 좀더 CMS를 이해하는데 도움이 될 것이며 아울러 다른 CMS를 포팅하는 작업도 이해가 쉬울 것입니다.

1단계는 database 스키마를 설계하는 것입니다.

일단, 가장 기본적인 스키마를 올려 놓겠습니다.
이 스키마는 확정된 것이 아니며, 누구든 업그레이드를 할 수 있습니다.
