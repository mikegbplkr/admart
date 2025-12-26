
  const modalData = {
    1: {
      title: "대형 전광판 광고",
      image: "https://cdn.crowdpic.net/detail-thumb/thumb_d_FFCF185383F07ECD946674C1EDE4E3E3.jpg",
      text: "압도적 스케일과 임팩트 확실하게! 브랜드 가치 제고"
    },
    2: {
      title: "쇼핑몰 · 광장 광고",
      image: "https://cdn.imweb.me/thumbnail/20250418/b47b0236e902b.jpg",
      text: "고객 접근성이 뛰어난 위치에서 홍보"
    },
    3: {
      title: "지하철 · 버스 광고",
      image: "https://i.pinimg.com/originals/3d/6c/c2/3d6cc2e514ab2344ba1dd8e5ad456f19.jpg",
      text: "대중교통을 이용하는 다수 타겟에게 노출"
    },
    4: {
      title: "아파트 · 오피스 광고",
      image: "https://tse3.mm.bing.net/th/id/OIP.1dSlW2ETs0SL-y67ElBqrgHaDO?pid=Api&P=0&h=180",
      text: "주거지역과 업무지역 집중 홍보"
    },
    5: {
      title: "★ 인물 · 스타 인증샷 포인트 ★",
      image: "https://i.ytimg.com/vi/ah3ckNtTc7A/maxresdefault.jpg?sqp=-oaymwEmCIAKENAF8quKqQMa8AEB-AGICIAC0AWKAgwIABABGE8gWyhlMA8=&rs=AOn4CLAyJ36evUFrrvYRPFldNPYJonKUzA",
      text: "3일, 7일, 15일"
    },
    6: {
      title: "★ 핫플! 타임싱크! ★",
      image: "https://tse1.mm.bing.net/th/id/OIP.VsuUx9zNjmxVbh0-eW4xXAHaE7?pid=Api&P=0&h=180",
      text: "문화・예술・축제・관광"
    },
    7: {
      title: "★ 패키지 특가! ★",
      image: "https://cdn.bizwnews.com/news/photo/202508/109284_119440_2926.png",
      text: "합리적인 비용 전광판 패키지"
    }
  };

  function closeModal() {
    document.getElementById("modal").classList.add("hidden");
  }

  // Load initial content
  const modalContent = document.getElementById("modal-content");
