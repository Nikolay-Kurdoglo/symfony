<?php

namespace Symfony\Component\Messenger\Bridge\Beanstalkd\Transport;

use Pheanstalk\Values\TubeName;
use Symfony\Component\Messenger\Stamp\NonSendableStampInterface;

/**
 * @author Nikolay Kurdoglo <nikolay.kurdoglo@icloud.com>
 */
final class BeanstalkdTubeStamp implements NonSendableStampInterface
{
    public function __construct(
        public readonly TubeName $tubeName,
    ) {
    }
}
