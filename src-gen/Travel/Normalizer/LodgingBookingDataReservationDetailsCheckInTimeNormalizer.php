<?php

namespace NxSys\Library\Clients\Brex\API\Travel\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use NxSys\Library\Clients\Brex\API\Travel\Runtime\Normalizer\CheckArray;
use NxSys\Library\Clients\Brex\API\Travel\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class LodgingBookingDataReservationDetailsCheckInTimeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataReservationDetailsCheckInTime::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataReservationDetailsCheckInTime::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataReservationDetailsCheckInTime();
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
        }
        elseif (\array_key_exists('timestamp', $data) && $data['timestamp'] === null) {
            $object->setTimestamp(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['local_time'] = $data->getLocalTime()->format('Y-m-d\TH:i:sP');
        if ($data->isInitialized('timestamp')) {
            $dataArray['timestamp'] = $data->getTimestamp()?->format('Y-m-d\TH:i:sP');
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataReservationDetailsCheckInTime::class => false];
    }
}