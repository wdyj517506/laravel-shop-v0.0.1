<?php

return [
    'alipay' => [
        'app_id'         => '2016091300504430',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA2N6LNLqICCFOxt5jdNKDLr3VHcstUnZ9I8ZO/RYF9rFBXVXHstV08KJ886ljVisdXc7mVUImVPP5Qa6G5kBB4jKfPH7NNgJsV4zsrONe6AP5vNqeJjhfVTolKUcyVSZwQeV4A3UpLxmyirBW0dcjvR7Y2IwA/Tg3kpKr9CKQ7clrN3GFo1eIYsEfImdPzBhKOw98/0UfuRTqDGXEF9vjXUO4ffQjjdSpqlFWOjPR2AzBZBQl92DcB+chid12K5ohPcxCTHYVTO20yepfI1CSxgUH0L5zVIX3UbVZFJ/LLXHVbWrxXbmImQXC/kedTStTihBcLIVJ25JJI0Gx8F2SCwIDAQAB',
        'private_key'    => 'MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQCjfn7TRtXexmV9ibAz+ZW1/ce0ia/FwzWgP3LZx0hEtDZcqA77F85kfeM6n3Owh/qV2a2RPqalS8iAl7LVWKIiZRA8Hr6StlcCp+4wj2qtDzfpQgVlMCad5uJrGV/zLs8Ns186lMqyM0ZBd5T46TLFoeBDHoAOSUqQ7ljBZ7VoDGhBcESE5NhqgIDJEuFDZc+JQFGCA94XGmv06xrWBZ09LG/FI32/AwwZJwnRVNrNQKoqa9B1TkZ9DD4ER+3Anh9MdMBsrWK0ATEVhibIJQ1erMW9oPhM2POeX34hgSXLZxG9WN07/0mejEMB1r5WM43895t5Bk7EPl2DTeJSILnNAgMBAAECggEALH19sayzAl5mu9S+GEaw0MdwktZs+Jn4e9UIQe8S4W9Q48Hv4bBGv93p+cfuSXmXXTPRIZc07gJDW4rsZVYrOMTbuCB9p5rq7pQYIyrD0rgzdMw8f56sw4dS0eYj0B9KxOWs4lofFoMReTs7VMjQwiscxecE3d5f5jSV/ntkSB24Nc76vUeE8PrCIjVLoiqwRBoX7RBIsoynEv7Vp3SDevP2jLyUtg+gQBm6UmbDjylL5Nf9LAjAFfWfOtpw/4lqwMZtmcEQ+2MLZu57kGTgyHOSMk0UDV5OZCCjMZvJ8InRjxMvpdXfdlB9Z0FFHtXI3WYB6XU/ej1AWOO+3FQpwQKBgQDkQnMZpvMHtbCk9WywXo/osyAXF+GKnWB5AzFzR4+SXDTqmQkLk/oKAKKfF5aIBcXRfa3QJRN9MXoT50dcC+q6J3V3qWeU7wISc7t385FRKHA0cDbMF4GVTCo4qvGsLS/+5HhHAxrIItjv6KSOyEZjkFk23MSnqLlx5+rY2ONmuQKBgQC3XRSkyo/p5+PTByILdv1QMBhrO3qGMVTBI4l4nN7nX4ZpvrR6khitzzkT747AtTViN/RvBAlY6svhs6xAmkhG4dut7nEWMkNvra3StE01X9TGRdE0eF9EVUPk4b8cMY3jjN+SVPLIy0/Skiq+o7uAyxaUY+I1vgC8F1oVVFVhtQKBgB+TeaywxanpXnhTYye6zRmZvfSz3wV34+KZqHuUCK5shv11EiVB4TMFB3oOn0pN0iG6yxKiLmIBOCwMsHhxRZVe5AcbrjKSJa07yVE8pnudpnf6lfoBvnFSyfxw2WHCFoOiQ2k/arMI7w2xFyKRXftj+pN2UtYGpzC0rm41ArAxAoGAMNvtn0eWd3Zh355b9QAc2ZwnNZOgv1cvxVMp02jBgJeUomK9hpedWdsI04YW3MSsV+KfEGHb98SA1UBiGsjBj5mpRrxth8OW8pAt7CI9HIbPlJGQAFI+2F97+uYoXWPa8hJclIpsMxLxzyNBnpDUaqoy9xFyem2JlpUGXP6eza0CgYBuuQrHPsrR1hEyXt29MePaeJFT1eepRgLGqST43uujxv/knSEcPKGUxAw00wV81SNFQ2S9+edWlAuCXZnDnekX/1+dRGyOCvlMEGvjsG5XCZXXpTycX6k6zbCNnpF26xadBcgnpqg7O/FGVpfPp4WDhoEHOiQesWVGdX/aanrDSQ==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];