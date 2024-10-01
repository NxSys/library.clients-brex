<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Travel\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use NxSys\Library\Clients\Brex\API\Travel\Runtime\Normalizer\CheckArray;
use NxSys\Library\Clients\Brex\API\Travel\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class BookingTimeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \NxSys\Library\Clients\Brex\API\Travel\Model\BookingTime::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Travel\Model\BookingTime::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \NxSys\Library\Clients\Brex\API\Travel\Model\BookingTime();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('local_time', $data)) {
                $object->setLocalTime(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['local_time']));
                unset($data['local_time']);
            }
            if (\array_key_exists('timestamp', $data) && $data['timestamp'] !== null) {
                $object->setTimestamp(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['timestamp']));
                unset($data['timestamp']);
            } elseif (\array_key_exists('timestamp', $data) && $data['timestamp'] === null) {
                $object->setTimestamp(null);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['local_time'] = $object->getLocalTime()?->format('Y-m-d\TH:i:sP');
            if ($object->isInitialized('timestamp') && null !== $object->getTimestamp()) {
                $data['timestamp'] = $object->getTimestamp()->format('Y-m-d\TH:i:sP');
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\NxSys\Library\Clients\Brex\API\Travel\Model\BookingTime::class => false];
        }
    }
} else {
    class BookingTimeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \NxSys\Library\Clients\Brex\API\Travel\Model\BookingTime::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Travel\Model\BookingTime::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \NxSys\Library\Clients\Brex\API\Travel\Model\BookingTime();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('local_time', $data)) {
                $object->setLocalTime(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['local_time']));
                unset($data['local_time']);
            }
            if (\array_key_exists('timestamp', $data) && $data['timestamp'] !== null) {
                $object->setTimestamp(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['timestamp']));
                unset($data['timestamp']);
            } elseif (\array_key_exists('timestamp', $data) && $data['timestamp'] === null) {
                $object->setTimestamp(null);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['local_time'] = $object->getLocalTime()?->format('Y-m-d\TH:i:sP');
            if ($object->isInitialized('timestamp') && null !== $object->getTimestamp()) {
                $data['timestamp'] = $object->getTimestamp()->format('Y-m-d\TH:i:sP');
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\NxSys\Library\Clients\Brex\API\Travel\Model\BookingTime::class => false];
        }
    }
}
