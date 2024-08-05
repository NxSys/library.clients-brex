<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace NxSys\Library\Clients\Brex\API\Travel\Normalizer;

use NxSys\Library\Clients\Brex\API\Travel\Runtime\Normalizer\CheckArray;
use NxSys\Library\Clients\Brex\API\Travel\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    protected $normalizers = ['NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\Address' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\AddressNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\AddressCoordinates' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\AddressCoordinatesNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\AddressGeoCoordinates' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\AddressGeoCoordinatesNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\AirBookingData' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\AirBookingDataNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\AirBookingDataRedressNumber' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\AirBookingDataRedressNumberNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\AirBookingDataKnownTravelerNumber' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\AirBookingDataKnownTravelerNumberNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\AirBookingDataDocumentNumber' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\AirBookingDataDocumentNumberNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\AirBookingDataFlight' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\AirBookingDataFlightNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\AirBookingDataFlightDepartureTime' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\AirBookingDataFlightDepartureTimeNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\AirBookingDataFlightArrivalTime' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\AirBookingDataFlightArrivalTimeNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\AirBookingDataFlightMarketingFlight' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\AirBookingDataFlightMarketingFlightNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\AirBookingDataFlightOperatingFlight' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\AirBookingDataFlightOperatingFlightNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\AirBookingDataFlightSeat' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\AirBookingDataFlightSeatNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\AirBookingDataFlightEndpoint' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\AirBookingDataFlightEndpointNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\AirBookingDataFlightEndpointAirportLocation' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\AirBookingDataFlightEndpointAirportLocationNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\AirBookingDataFlightNumber' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\AirBookingDataFlightNumberNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\AirBookingDataFlightTicket' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\AirBookingDataFlightTicketNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\AirBookingDataJourney' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\AirBookingDataJourneyNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\Booking' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\BookingNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\BookingTime' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\BookingTimeNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\CarRentalBookingData' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\CarRentalBookingDataNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\CarRentalBookingDataCarDetails' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\CarRentalBookingDataCarDetailsNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\CarRentalBookingDataRentalEndpoint' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\CarRentalBookingDataRentalEndpointNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\CarRentalBookingDataRentalEndpointLocation' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\CarRentalBookingDataRentalEndpointLocationNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\CarRentalBookingDataRentalEndpointTime' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\CarRentalBookingDataRentalEndpointTimeNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\CarRentalBookingDataReservationDetails' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\CarRentalBookingDataReservationDetailsNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\CarRentalBookingDataReservationDetailsPickup' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\CarRentalBookingDataReservationDetailsPickupNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\CarRentalBookingDataReservationDetailsDropOff' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\CarRentalBookingDataReservationDetailsDropOffNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\LodgingBookingData' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\LodgingBookingDataNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\LodgingBookingDataContactInfo' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\LodgingBookingDataContactInfoNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\LodgingBookingDataLodgingDetails' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\LodgingBookingDataLodgingDetailsNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\LodgingBookingDataLodgingDetailsContactInformation' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\LodgingBookingDataLodgingDetailsContactInformationNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\LodgingBookingDataLodgingDetailsLocation' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\LodgingBookingDataLodgingDetailsLocationNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\LodgingBookingDataReservationDetails' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\LodgingBookingDataReservationDetailsNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\LodgingBookingDataReservationDetailsCheckInTime' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\LodgingBookingDataReservationDetailsCheckInTimeNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\LodgingBookingDataReservationDetailsCheckoutTime' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\LodgingBookingDataReservationDetailsCheckoutTimeNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\LodgingBookingDataReservationDetailsRoom' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\LodgingBookingDataReservationDetailsRoomNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\LodgingBookingDataRoom' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\LodgingBookingDataRoomNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\PageBooking' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\PageBookingNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\PageTrip' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\PageTripNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\RailBookingData' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\RailBookingDataNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\RailBookingDataRailJourney' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\RailBookingDataRailJourneyNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\RailBookingDataRailLeg' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\RailBookingDataRailLegNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\RailBookingDataRailLegDepartureTime' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\RailBookingDataRailLegDepartureTimeNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\RailBookingDataRailLegArrivalTime' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\RailBookingDataRailLegArrivalTimeNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\RailBookingDataRailLegVehicle' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\RailBookingDataRailLegVehicleNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\RailBookingDataRailLegSeat' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\RailBookingDataRailLegSeatNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\RailBookingDataRailSeat' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\RailBookingDataRailSeatNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\RailBookingDataRailStation' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\RailBookingDataRailStationNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\RailBookingDataRailStationLocation' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\RailBookingDataRailStationLocationNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\RailBookingDataVehicle' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\RailBookingDataVehicleNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\Traveler' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\TravelerNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\TravelerName' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\TravelerNameNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\Trip' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\TripNormalizer', 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Model\\TripTraveler' => 'NxSys\\Library\\Clients\\Brex\\API\\Travel\\Normalizer\\TripTravelerNormalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\NxSys\\Library\\Clients\\Brex\\API\\Travel\\Runtime\\Normalizer\\ReferenceNormalizer'];
    protected $normalizersCache = [];

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return array_key_exists($type, $this->normalizers);
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);

        return $normalizer->normalize($object, $format, $context);
    }

    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);

        return $denormalizer->denormalize($data, $class, $format, $context);
    }

    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }

    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;

        return $normalizer;
    }
}