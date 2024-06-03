<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController' shared service.

$a = new \League\OAuth2\Server\AuthorizationServer(new \PrestaShopBundle\Security\OAuth2\Repository\ClientRepository(($this->privates['security.user.provider.concrete.oauth2'] ?? ($this->privates['security.user.provider.concrete.oauth2'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider([]))), ($this->services['security.password_encoder'] ?? $this->load('getSecurity_PasswordEncoderService.php'))), new \PrestaShopBundle\Security\OAuth2\Repository\AccessTokenRepository(), new \PrestaShopBundle\Security\OAuth2\Repository\NullScopeRepository(), new \League\OAuth2\Server\CryptKey('-----BEGIN PRIVATE KEY-----'."\n".'MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCkpnAxAFLc8umA'."\n".'gmuBDUkG7n/bxR/foHLKYbC4H8+Us7RMnA4l4fFDSCm6VxmHFZiAIa883aEh6iCn'."\n".'jo1Q3nLSIDeZsIIzzBgK/6TPlv7ocNR1I0QI/3o33yoEk2UVYHGF8QNj0dtCqSKx'."\n".'p+coVqouCkRIhDGXt7kpR8kAo4tKuhVs6n+4z26kkpjb7F+y746pDx5hN3PQ10Me'."\n".'mJ3VlRyDQXIkTZQKz1tkzjtGCCx5qPACu08XtpsBPuKarthFvoqYIaBXVbc2cjrB'."\n".'eY2UrPvbc2cdSKPYJHOpH5YJaf0riix9e5eqLScbvwxAdi50pgvI3NI86IaCrF7E'."\n".'LNgC6cqfAgMBAAECggEAA7QeDu7Hw7ePwA0ZokqsYK8JtOWqEguCZCyutHLmu5y6'."\n".'iq9HSYaGY5yNGmduKBHjdHJi24wispLDzvEPxbNomB29vRkcJ1Jzx1TjyKryq0N/'."\n".'y+4R+t/VncnJIKw4wwfV1eJLe2R+OZwjWdAB4kWSHhIAt4mIXLYhwJzK7SxAlwWE'."\n".'8f0DNsclz2xHpu++2DHGyK++agbXfETKuDIGrvzXU96CPcAnc9RRof0k8z85LuC7'."\n".'ouIX1Y4LseFMfy1l8/FlBrBrcxuA4n0r4DdaVYncOilP+J3suA3ef33XsLlfg8U8'."\n".'EBxJXjnsr2YKJfFj12DlCDufP2iE0VnFxBLivFTj7QKBgQDbKdfIKLlKUJMN6mHo'."\n".'5O+IVvkDzhUqmlHsAMimfoBBY8HSKfhhbh8FYk6+vLMJ2+oytjAkatN/AzRThY2D'."\n".'ZY98WLMC/mqTVkcFXfJq2m43QlFqycgOBo4no0Y1svOAGRbzwvaPCp4hK5IMFyF1'."\n".'optBWsj87bVTTaJ+luiEiPKZFQKBgQDAUv/A1P6f/SdiU/bsF3564VHpS77HNhFI'."\n".'Aq3dDr+1hMTsi3EXo+Cei41rKSAJgU8L29ul6t/wrX6GjGwRhjKmYtayuz7m+ymr'."\n".'SvHPekbMAPkYYlbR9zn9LXiAc+pr2uTwMhR6e4C9o/zrGBMHs37PNl1SmRLrGqfp'."\n".'o48ly7UZ4wKBgAgE6e5a/xynAhp6PwbkiZc1h3sKKWAbsW+vP6hH7K131vm3q2z1'."\n".'OJFb3YHBKdPshg9A91X9yqtVFK8RrfHm328vV61+XavydjrOCza5s1q2RIBhzb4l'."\n".'o0H0CXehiqNfR6W3tonZW5vfGkLy/bhuMLwddEk88WuQ5ac4Il3nHOlZAoGAC3Ql'."\n".'9Rb6Pw71jH6RowfXKXxHw4wWRYjryI0YS6T4N9g7XhcD2jORSf/noS0m0koYKg2i'."\n".'7COryIqckWjFetmyJISYYraSDXGBzsi80+1lT/ry2sfogcKmenR9y7CbkmbL4Z4p'."\n".'6A144lJk2p9parj+4VpMfoHNRaElxN1PxiF2nJ8CgYEA0rRDv40HP+qJMtxf3b2Y'."\n".'V+RYAb3PHZ4kCvrAoRdPbzM8dgaim+jPJPlOUEqjOVarV2u1jx6lurFyHrKVSacT'."\n".'BQR/KL8ag2eI69jy7ARh2W99DJlon5UPDZZtsC8p4dizqqr2qB4tKCHvMGK4LEFE'."\n".'A98n0Jf2JXmZmrDC69waROg='."\n".'-----END PRIVATE KEY-----'."\n".''), 'def000005ff1b461aaea95a8a5451996cf497c0df569b815e93dcdde6d87928b5a5ffd5afb273c991e5cde66753e9ce103967ec0c4b91be7b90815cdb898d47395cd22fe');
$a->enableGrantType(new \League\OAuth2\Server\Grant\ClientCredentialsGrant());
$b = new \Nyholm\Psr7\Factory\Psr17Factory();

return $this->services['PrestaShopBundle\\Controller\\Api\\OAuth2\\AccessTokenController'] = new \PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController($a, new \Symfony\Bridge\PsrHttpMessage\Factory\PsrHttpFactory($b, $b, $b, $b), new \Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory(), $b);