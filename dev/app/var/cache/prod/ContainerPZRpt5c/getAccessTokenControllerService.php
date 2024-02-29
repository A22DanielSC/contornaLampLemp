<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController' shared service.

$a = new \League\OAuth2\Server\AuthorizationServer(new \PrestaShopBundle\Security\OAuth2\Repository\ClientRepository(($this->privates['security.user.provider.concrete.oauth2'] ?? ($this->privates['security.user.provider.concrete.oauth2'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider([]))), ($this->services['security.password_encoder'] ?? $this->load('getSecurity_PasswordEncoderService.php'))), new \PrestaShopBundle\Security\OAuth2\Repository\AccessTokenRepository(), new \PrestaShopBundle\Security\OAuth2\Repository\NullScopeRepository(), new \League\OAuth2\Server\CryptKey('-----BEGIN PRIVATE KEY-----'."\n".'MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQC7HEvcjGJDhsYp'."\n".'r0cJGLKusZqFJSu/geW93w0xDqPC5UO5aUn6K54GPzyemmef72RRuopZ9vjn6R2x'."\n".'P61G+BrxujafcLXIGCoSme2moZOCd/e4H2frYZ74tTSZ++FDHSuI+TN7q0dejZD/'."\n".'CiMJ/GxS6V8gSYiFrJOSlGbtWu8uygJzahaV3UF8W5XvNIgjt+NyZLPWUOZxFpdy'."\n".'in/tYpPWJyTVnUI5jKdBpyneHN22wim+EkvIMyxVzM2Tjqr5XXoPGWD9/lshQlJS'."\n".'prUJJoNi/Qi2phOBP2Cs3cxFu61iA7JHYRvBLKU8Hkvufe9Y9ll0jvkTXSdVQWX+'."\n".'P4FoUwJrAgMBAAECggEAQq0ws2UrVxjd4NjfHXS5p9sOT0gRsOrfLawgjUzEOp1s'."\n".'ZtQIUqfcZil+tp4bMzkhrKYmyyxhQnMl65Xfb5zWLTHIaUTG4okJ5RsJPwnxANsz'."\n".'YV9/rrdY6RPZrM2/ViU88FCtcfJ1OlKESv4XwmU7TMhw55aMmeYHqIJNs2NmPGuO'."\n".'hHZnj0tZP0I69DVQMpv0VYXMGf0MB53bb6lDQVuVZllWD+dwgFV3YhPrkWz1Uivy'."\n".'hNb7Xbv/Cz50pFh5+Wp2guD7rfm8znI4PrqdzwhjpWT414NC7PtUtpEopcVziMZj'."\n".'ju4TYSopi3Utt/4RVW9AKwheRjNDtll7evF2I0TSkQKBgQD91hOd5ui0YvWVBSTx'."\n".'3zJNanntlndn3RaooDJ6FxHO3LrC+MMtq+vjIMg2Qyi9GJvrAXXzeuBD7WC1asvq'."\n".'QwJqo46y8U132/vybUNlGMStTNC53yRE5TLA9vZIiZ8qtvuOD9Xqvj0Rw7sE+SHE'."\n".'nFxasmfcoos7E0ugEKsjB/IZhwKBgQC8tJxA5D2/YopwIImm+WN2fSPpODrEv25q'."\n".'XZJqszqTGWbPKMzVhpzjhxuHqVRikrEDSy8vlRYVbM/6k2JUejyhnN//8e3IUx6I'."\n".'OYrmbOIaVi7IYUt0PQ1fY2hpPbi+lRZYHgHFnerrpodZqxBXVZ7pDRTKazwOIjOq'."\n".'Nk+rsUP4/QKBgFYxkWu28yH90IKPwqHXNo+PLmP9CgLc0krkSv+mQcfKsChwrGYf'."\n".'0PPJN/MlDvpXFurQDitleC3Yt1QjNacQpgtsCpK82Z9vtbf2XkJADNkEEoRrPzed'."\n".'1IQt2Cd9g+zPQdBVlEAn5TjZC/J+XncS2VF670W+dCTVQoLR5ir5Eb6VAoGAc4X6'."\n".'NnvEFXtFFxnES3VXX72Ck4854yLyfKlmLm4kyNL/LolixMGRIHWg8+9E2sfFGCgZ'."\n".'7f5OM7WWqWc7Bk6C+clpFG5OTJoeEfVwRFqaHNdv8nol0DZkDmZ0ECGaDQqGUFGm'."\n".'cg2YOMWNDOb9rQmcrD224ai+bkSf7m8rXQe7fh0CgYEA6rtOoxlUeqnEEbisUHa/'."\n".'qsAyAbOB58++JW5HnWgKf3IARnZRJ0UkBjCYEkRgx6/eTLbn736jIj3pDV+zMwgU'."\n".'A0c4OFt8xEeGE9w9XdRREwzGtBOd6vu54plnqCL/6a/QgPiFZFFHV2L363vrFU+s'."\n".'zncBH9vw3rF4g+zmQwVbKOY='."\n".'-----END PRIVATE KEY-----'."\n".''), 'def000004749c2d8c4d92b99faab8045d5d78d01c36421236ae31ff49ed6f21b8ec4f2183aed4539feb2fef925bb5345be1a107efd82a7f4f625dfdb8cade7bfd2463cc6');
$a->enableGrantType(new \League\OAuth2\Server\Grant\ClientCredentialsGrant());
$b = new \Nyholm\Psr7\Factory\Psr17Factory();

return $this->services['PrestaShopBundle\\Controller\\Api\\OAuth2\\AccessTokenController'] = new \PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController($a, new \Symfony\Bridge\PsrHttpMessage\Factory\PsrHttpFactory($b, $b, $b, $b), new \Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory(), $b);
