
const translations = {
  en: {
    searchPlaceholder: "Search locations",
    categories: ["Entire", "Building", "Traffic", "Shopping", "Life"],
    modalTitles: {
      1: "Large Billboard Ads",
      2: "Shopping Mall / Plaza Ads",
      3: "Subway / Bus Ads",
      4: "Apartment / Office Ads",
      5: "★ Celebrity / Star Photo Points ★",
      6: "★ Hot Place! Time Sync! ★",
      7: "★ Package Special! ★"
    },
    modalTexts: {
      1: "Impactful large-scale advertising to boost brand value",
      2: "Promote at locations with high customer access",
      3: "Exposed to mass targets using public transport",
      4: "Focused promotion in residential and business areas",
      5: "3 days, 7 days, 15 days",
      6: "Culture, art, festival, tourism",
      7: "Affordable billboard package"
    }
  },
  kr: {
    searchPlaceholder: "위치 검색",
    categories: ["전체", "건물", "교통", "쇼핑", "생활"],
    modalTitles: {
      1: "대형 전광판 광고",
      2: "쇼핑몰 · 광장 광고",
      3: "지하철 · 버스 광고",
      4: "아파트 · 오피스 광고",
      5: "★ 인물 · 스타 인증샷 포인트 ★",
      6: "★ 핫플! 타임싱크! ★",
      7: "★ 패키지 특가! ★"
    },
    modalTexts: {
      1: "압도적 스케일과 임팩트 확실하게! 브랜드 가치 제고",
      2: "고객 접근성이 뛰어난 위치에서 홍보",
      3: "대중교통을 이용하는 다수 타겟에게 노출",
      4: "주거지역과 업무지역 집중 홍보",
      5: "3일, 7일, 15일",
      6: "문화・예술・축제・관광",
      7: "합리적인 비용 전광판 패키지"
    }
  }
};

let currentLang = "kr";

function setLanguage(lang) {
  currentLang = lang;
 
  const searchInput = document.getElementById("searchInput");
  if (searchInput) searchInput.placeholder = translations[lang].searchPlaceholder;
 
  const categoryButtons = document.querySelectorAll("header button");
  categoryButtons.forEach((btn, index) => {
    if (translations[lang].categories[index]) {
      btn.textContent = translations[lang].categories[index];
    }
  }); 
  const activeId = document.querySelector(".sidebar-link.bg-gray-200")?.dataset.id;
  if (activeId && typeof loadContent === "function") loadContent(activeId);
}
 
document.getElementById("lang-en")?.addEventListener("click", () => setLanguage("en"));
document.getElementById("lang-kr")?.addEventListener("click", () => setLanguage("kr"));
