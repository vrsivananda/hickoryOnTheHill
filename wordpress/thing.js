if (domainOnlyElementExists) {
      
      document.querySelector('#domain_only > a').setAttribute('href', 'https://www.bluehost.com/web-hosting/signup');
      
      dataLayer.push({
      'eventCategory': 'Domain Only Flow',
      'eventAction': 'viewed billing page on domain only flow',
      'eventLabel': {{pageIfSignupPage}},
      'event': 'GAEvent'
      });
      
      document.querySelector('#domain_only > a').onclick = function() {trackUpsellClick()};
      
      function trackUpsellClick() {
        dataLayer.push({
          'eventCategory': 'Domain Only Flow',
          'eventAction': 'clicked hosting upsell offer',
          'eventLabel': {{pageIfSignupPage}},
          'event': 'GAEvent'
        });
      }
            
    } else {
    }