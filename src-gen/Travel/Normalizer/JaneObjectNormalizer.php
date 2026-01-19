<?php

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
    protected $normalizers = [
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\Address::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\AddressNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\AddressCoordinates::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\AddressCoordinatesNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\AddressGeoCoordinates::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\AddressGeoCoordinatesNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingData::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\AirBookingDataNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataRedressNumber::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\AirBookingDataRedressNumberNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataKnownTravelerNumber::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\AirBookingDataKnownTravelerNumberNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataDocumentNumber::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\AirBookingDataDocumentNumberNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlight::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\AirBookingDataFlightNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightDepartureTime::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\AirBookingDataFlightDepartureTimeNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightArrivalTime::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\AirBookingDataFlightArrivalTimeNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightMarketingFlight::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\AirBookingDataFlightMarketingFlightNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightOperatingFlight::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\AirBookingDataFlightOperatingFlightNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightSeat::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\AirBookingDataFlightSeatNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightEndpoint::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\AirBookingDataFlightEndpointNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightEndpointAirportLocation::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\AirBookingDataFlightEndpointAirportLocationNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightNumber::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\AirBookingDataFlightNumberNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightTicket::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\AirBookingDataFlightTicketNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataJourney::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\AirBookingDataJourneyNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\Booking::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\BookingNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\BookingTime::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\BookingTimeNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingData::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\CarRentalBookingDataNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataCarDetails::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\CarRentalBookingDataCarDetailsNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataRentalEndpoint::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\CarRentalBookingDataRentalEndpointNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataRentalEndpointLocation::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\CarRentalBookingDataRentalEndpointLocationNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataRentalEndpointTime::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\CarRentalBookingDataRentalEndpointTimeNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataReservationDetails::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\CarRentalBookingDataReservationDetailsNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataReservationDetailsPickup::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\CarRentalBookingDataReservationDetailsPickupNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataReservationDetailsDropOff::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\CarRentalBookingDataReservationDetailsDropOffNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingData::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\LodgingBookingDataNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataContactInfo::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\LodgingBookingDataContactInfoNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataLodgingDetails::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\LodgingBookingDataLodgingDetailsNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataLodgingDetailsContactInformation::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\LodgingBookingDataLodgingDetailsContactInformationNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataLodgingDetailsLocation::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\LodgingBookingDataLodgingDetailsLocationNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataReservationDetails::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\LodgingBookingDataReservationDetailsNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataReservationDetailsCheckInTime::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\LodgingBookingDataReservationDetailsCheckInTimeNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataReservationDetailsCheckoutTime::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\LodgingBookingDataReservationDetailsCheckoutTimeNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataReservationDetailsRoom::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\LodgingBookingDataReservationDetailsRoomNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataRoom::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\LodgingBookingDataRoomNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\PageBooking::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\PageBookingNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\PageTrip::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\PageTripNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingData::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\RailBookingDataNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailJourney::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\RailBookingDataRailJourneyNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLeg::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\RailBookingDataRailLegNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLegDepartureTime::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\RailBookingDataRailLegDepartureTimeNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLegArrivalTime::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\RailBookingDataRailLegArrivalTimeNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLegVehicle::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\RailBookingDataRailLegVehicleNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLegSeat::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\RailBookingDataRailLegSeatNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailSeat::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\RailBookingDataRailSeatNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailStation::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\RailBookingDataRailStationNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailStationLocation::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\RailBookingDataRailStationLocationNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataVehicle::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\RailBookingDataVehicleNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\Traveler::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\TravelerNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\TravelerName::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\TravelerNameNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\Trip::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\TripNormalizer::class,
        
        \NxSys\Library\Clients\Brex\API\Travel\Model\TripTraveler::class => \NxSys\Library\Clients\Brex\API\Travel\Normalizer\TripTravelerNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \NxSys\Library\Clients\Brex\API\Travel\Runtime\Normalizer\ReferenceNormalizer::class,
    ], $normalizersCache = [];
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $normalizerClass = $this->normalizers[get_class($data)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($data, $format, $context);
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $denormalizerClass = $this->normalizers[$type];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $type, $format, $context);
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
    public function getSupportedTypes(?string $format = null): array
    {
        return [
            
            \NxSys\Library\Clients\Brex\API\Travel\Model\Address::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\AddressCoordinates::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\AddressGeoCoordinates::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingData::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataRedressNumber::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataKnownTravelerNumber::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataDocumentNumber::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlight::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightDepartureTime::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightArrivalTime::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightMarketingFlight::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightOperatingFlight::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightSeat::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightEndpoint::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightEndpointAirportLocation::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightNumber::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataFlightTicket::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\AirBookingDataJourney::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\Booking::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\BookingTime::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingData::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataCarDetails::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataRentalEndpoint::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataRentalEndpointLocation::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataRentalEndpointTime::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataReservationDetails::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataReservationDetailsPickup::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\CarRentalBookingDataReservationDetailsDropOff::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingData::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataContactInfo::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataLodgingDetails::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataLodgingDetailsContactInformation::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataLodgingDetailsLocation::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataReservationDetails::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataReservationDetailsCheckInTime::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataReservationDetailsCheckoutTime::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataReservationDetailsRoom::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\LodgingBookingDataRoom::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\PageBooking::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\PageTrip::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingData::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailJourney::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLeg::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLegDepartureTime::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLegArrivalTime::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLegVehicle::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailLegSeat::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailSeat::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailStation::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataRailStationLocation::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\RailBookingDataVehicle::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\Traveler::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\TravelerName::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\Trip::class => false,
            \NxSys\Library\Clients\Brex\API\Travel\Model\TripTraveler::class => false,
            \Jane\Component\JsonSchemaRuntime\Reference::class => false,
        ];
    }
}